<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload_Test;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{

	public function upload(){
		$upload_test = Upload_Test::get();
		return view('upload.index',['upload_test' => $upload_test]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10000',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img';
		$file->move($tujuan_upload,$nama_file);
 
		Upload_Test::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}

	// public function data() {
 //        //memanggil view data
 //        return view('upload.data');
 //    }

	public function data() {
        //mengambil data dari table pegawai
        $upload_test = DB::table('upload_test')->get();

        //mengirim data ke view index
        return view('upload.data',['upload_test' => $upload_test]);
    }

}
