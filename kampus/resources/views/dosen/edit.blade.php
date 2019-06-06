<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>edit data dosen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>
        Edit Data Pegawai
    </h3>
    <a href="/laraip/dosen"> Kembali</a>
    @foreach($dosen as $dos)
    <form action="/laraip/dosen/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $dos->dosen_id }}"> <br/>
        Nama Lengkap <br/>
        <input type="text" required="required" name="dos_nama" value="{{ $dos->dosen_nama }}"> <br/>
        Matakuliah <br/>
        <input type="text" required="required" name="dos_matakuliah" value="{{ $dos->dosen_matakuliah }}"> <br/>
        No Handphone <br/>
        <input type="text" required="required" name="dos_nohp" value="{{ $dos->dosen_nohp }}"> <br/>
        Email <br/>
        <input type="email" required="required" name="dos_email" value="{{ $dos->dosen_email }}"> <br/>
        Alamat <br/>
        <textarea required="required" name="dos_alamat">{{ $dos->dosen_alamat }}</textarea> <br/>
        <input type="submit" value="Update Data">
    </form>
    @endforeach
</body>
</html>