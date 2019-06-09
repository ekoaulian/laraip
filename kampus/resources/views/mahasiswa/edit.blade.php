<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit data mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>
        Edit Data Pegawai
    </h3>
    <a href="/laraip/mahasiswa"> Kembali</a>
    @foreach($mahasiswa as $mhs)
    <form action="/laraip/mahasiswa/update" method="post">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $mhs->mahasiswa_id }}"> <br/>
        Npm <br/>
        <input type="text" required="required" name="mhs_npm" value="{{ $mhs->mahasiswa_npm }}"> <br/>
        Nama Lengkap <br/>
        <input type="text" required="required" name="mhs_nama" value="{{ $mhs->mahasiswa_nama }}"> <br/>
        Jurusan <br/>
        <input type="text" required="required" name="mhs_jurusan" value="{{ $mhs->mahasiswa_jurusan }}"> <br/>
        Email <br/>
        <input type="email" required="required" name="mhs_email" value="{{ $mhs->mahasiswa_email }}"> <br/>
        No Handphone <br/>
        <input type="text" required="required" name="mhs_nohp" value="{{ $mhs->mahasiswa_nohp }}"> <br/>
        Foto<br/>
        <input type="text" required="required" name="mhs_foto" value="{{ $mhs->mahasiswa_foto }}"> <br/>
        Alamat <br/>
        <textarea required="required" name="mhs_alamat">{{ $mhs->mahasiswa_alamat }}</textarea> <br/>
        <input type="submit" value="Update Data">
    </form>
    @endforeach
</body>
</html>