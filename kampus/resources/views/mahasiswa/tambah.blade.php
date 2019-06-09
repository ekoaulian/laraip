<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>
        Tambah Mahasiswa
    </h3>
    <a href="/laraip/mahasiswa">Kembali</a>
    <br/>
    <br/>
    <form action="/laraip/mahasiswa/store" method="post">
    {{ csrf_field() }}
    Npm <br/>
    <input type="text" name="mhs_npm" required="required" placeholder="Npm"><br>
    Nama Mahasiswa <br/>
    <input type="text" name="mhs_nama" required="required" placeholder="Nama Mahasiswa"><br>
    Jurusan <br/>
    <input type="text" name="mhs_jurusan" required="required" placeholder="Jurusan"><br>
    Email <br/>
    <input type="email" name="mhs_email" required="required" placeholder="Email"><br>
    No Handphone <br/>
    <input type="text" name="mhs_nohp" required="required" placeholder="No Handphone"><br>
    Foto <br/>
    <input type="file" name="mhs_foto" required="required" placeholder="foto"><br>
    Alamat <br/>
    <textarea name="mhs_alamat" required="required" placeholder="Alamat lengkap"></textarea><br>
    <input type="submit" value="Simpan">

    </form>

</body>
</html>