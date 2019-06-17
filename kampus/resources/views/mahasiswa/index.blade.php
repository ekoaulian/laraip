<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   
    <h3>
        Data Mahasiswa
    </h3>
    <a href="http://localhost/laraip/">Home ,</a>
    <!-- <a href="{{route('logout')}}">Logout</a> --><br/><br/>
    ------<br/>
    <a href="/laraip/mahasiswa/tambah">Tambah Mahasiswa</a><br/><br/>
    <table border="2">
        <tr>
            <th>Id Mahasiswa</th>
            <th>Npm</th>
            <th>Nama Lengkap</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Ho Handphone</th>
            <th>Foto</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->mahasiswa_id }}</td>
            <td>{{ $mhs->mahasiswa_npm }}</td>
            <td>{{ $mhs->mahasiswa_nama }}</td>
            <td>{{ $mhs->mahasiswa_jurusan }}</td>
            <td>{{ $mhs->mahasiswa_email }}</td>
            <td>{{ $mhs->mahasiswa_nohp }}</td>
            <td><img src="{{ asset('fotomhs/'.$mhs->mahasiswa_foto) }}" height="70"></td>
            <td>{{ $mhs->mahasiswa_alamat }}</td>
            <td>
                <a href="/laraip/mahasiswa/edit/{{ $mhs->mahasiswa_id }}">Edit</a> |
                <a href="/laraip/mahasiswa/hapus/{{ $mhs->mahasiswa_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>