<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index() {
        //mengambil data dari table pegawai
        $dosen = DB::table('dosen')->get();

        //mengirim data ke view index
        return view('dosen.index',['dosen' => $dosen]);
    }

    public function tambah() {
        //memanggil view tambah
        return view('dosen.tambah');
    }

    public function store(Request $request) {
    // input data ke table dosen 'dosen_nama' = field di database dosen_nama = name dr tambah.blade.php
    DB::table('dosen')->insert([
        'dosen_nama' => $request->dosen_nama,
        'dosen_matakuliah' => $request->dosen_matakuliah,
        'dosen_nohp' => $request->dosen_nohp,
        'dosen_email' => $request->dosen_email,
        'dosen_alamat' => $request->dosen_alamat
    ]);

    // setelah proses selesai alihkan ke halaman dosen
    return redirect('/dosen');
    }

    public function edit($id) {
    // mengambil data dosen berdasarkan id yang dipilih
    $dosen = DB::table('dosen')->where('dosen_id',$id)->get();
    // passing data dosen yang didapat ke view edit.blade.php
    return view('dosen.edit',['dosen' => $dosen]);
    }

    public function update(Request $request) {
    // update data dosen
    DB::table('dosen')->where('dosen_id',$request->id)->update([
        'dosen_nama' => $request->dos_nama,
        'dosen_matakuliah' => $request->dos_matakuliah,
        'dosen_nohp' => $request->dos_nohp,
        'dosen_email' => $request->dos_email,
        'dosen_alamat' => $request->dos_alamat
    ]);
    // setelah proses selesai alihkan ke halaman dosen
    return redirect('/dosen');
    }

    public function hapus($id) {
    // menghapus data dosen berdasarkan id yang dipilih
    DB::table('dosen')->where('dosen_id',$id)->delete();
      
    // setelah proses selesai alihkan ke halaman dosen
    return redirect('/dosen');
    }

}
