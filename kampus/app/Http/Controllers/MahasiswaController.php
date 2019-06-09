<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    public function index() {
        //mengambil data dari table pegawai
        $mahasiswa = DB::table('mahasiswa')->get();

        //mengirim data ke view index
        return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }

    public function tambah() {
        //memanggil view tambah
        return view('mahasiswa.tambah');
    }

    public function store(Request $request) {
    // input data ke table dosen 'dosen_nama' = field di database dosen_nama = name dr tambah.blade.php
    DB::table('mahasiswa')->insert([
    	'mahasiswa_npm' => $request->mhs_npm,
        'mahasiswa_nama' => $request->mhs_nama,
        'mahasiswa_jurusan' => $request->mhs_jurusan,
        'mahasiswa_email' => $request->mhs_email,
        'mahasiswa_nohp' => $request->mhs_nohp,
        'mahasiswa_foto' => $request->mhs_foto,
        'mahasiswa_alamat' => $request->mhs_alamat
        
    ]);

    // setelah proses selesai alihkan ke halaman mahasiswa
    return redirect('/mahasiswa');
    }

    public function edit($id) {
    // mengambil data mahasiswa berdasarkan id yang dipilih
    $mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->get();
    // passing data mahasiswa yang didapat ke view edit.blade.php
    return view('mahasiswa.edit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request) {
    // update data mahasiswa
    DB::table('mahasiswa')->where('mahasiswa_id',$request->id)->update([
        'mahasiswa_npm' => $request->mhs_npm,
        'mahasiswa_nama' => $request->mhs_nama,
        'mahasiswa_jurusan' => $request->mhs_jurusan,
        'mahasiswa_email' => $request->mhs_email,
        'mahasiswa_nohp' => $request->mhs_nohp,
        'mahasiswa_foto' => $request->mhs_foto,
        'mahasiswa_alamat' => $request->mhs_alamat
    ]);
    // setelah proses selesai alihkan ke halaman mahasiswa
    return redirect('/mahasiswa');
    }

    public function hapus($id) {
    // menghapus data mahasiswa berdasarkan id yang dipilih
    DB::table('mahasiswa')->where('mahasiswa_id',$id)->delete();
      
    // setelah proses selesai alihkan ke halaman mahasiswa
    return redirect('/mahasiswa');
    }

}
