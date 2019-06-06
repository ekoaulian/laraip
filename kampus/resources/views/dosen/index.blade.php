<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Dosen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   
    <h3>
        Data Dosen
    </h3>
    <a href="{{route('logout')}}">Logout</a><br/><br/>
    ------<br/>
    <a href="/laraip/dosen/tambah">Tambah dosen</a><br/><br/>
    <table border="2">
        <tr>
            <th>Id dosen</th>
            <th>Nama Lengkap</th>
            <th>Matakuliah</th>
            <th>Ho Handphone</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach($dosen as $dos)
        <tr>
            <td>{{ $dos->dosen_id }}</td>
            <td>{{ $dos->dosen_nama }}</td>
            <td>{{ $dos->dosen_matakuliah }}</td>
            <td>{{ $dos->dosen_nohp }}</td>
            <td>{{ $dos->dosen_email }}</td>
            <td>{{ $dos->dosen_alamat }}</td>
            <td>
                <a href="/laraip/dosen/edit/{{ $dos->dosen_id }}">Edit</a> |
                <a href="/laraip/dosen/hapus/{{ $dos->dosen_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>