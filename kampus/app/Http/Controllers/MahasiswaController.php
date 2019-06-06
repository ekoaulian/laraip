<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        //memanggil view index
        return view('mahasiswa.index');
    }
}
