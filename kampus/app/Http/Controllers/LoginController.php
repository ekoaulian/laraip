<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

	public function login(Request $request)
    {
        // $mahasiswa = new MahasiswaController();
        //$mahasiswa->angka();
        if(Users::where(['email'=>$request->email, 'password'=>$request->password])->count() < 1)
        {
            return redirect()->route('get.login');
        }
        else
        {
            $user = Users::where(['email'=>$request->email, 'password'=>$request->password])->first();

            Auth::guard('user')->login($user);
            return redirect()->intended(route('dosen.user'));
        }
    } 

    function __construct()
    {
        $this->middleware('guest:user', ['except' => 'logout']);
    }

	function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('welcome');
    }
}
