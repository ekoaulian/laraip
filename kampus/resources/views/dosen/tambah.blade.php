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
        Tambah pegawai
    </h3>
    <a href="/laraip/dosen">Kembali</a>
    <br/>
    <br/>
    <form action="/laraip/dosen/store" method="post">
    {{ csrf_field() }}
    Nama Dosen <br/>
    <input type="text" name="dosen_nama" required="required" placeholder="Nama Dosen"><br>
    Matakuliah <br/>
    <input type="text" name="dosen_matakuliah" required="required" placeholder="Matakuliah"><br>
    Ho Handphone <br/>
    <input type="text" name="dosen_nohp" required="required" placeholder="No Handphone"><br>
    Email <br/>
    <input type="email" name="dosen_email" required="required" placeholder="Email"><br>
    Alamat <br/>
    <textarea name="dosen_alamat" required="required" placeholder="Alamat lengkap"></textarea><br>
    <input type="submit" value="Simpan">

    </form>

</body>
</html>