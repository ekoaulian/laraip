<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   
    <h3>
        Data Upload
    </h3>
    <a href="http://localhost/laraip/upload/">kembali</a><br/><br/>
    <table class="table table-bordered table-striped">
        <tr>
            <th width="15">Id</th>
            <th>File</th>
            <th>Keterangan</th>
            <th>Tanggal upload</th>
            <th>Aksi</th>
        </tr>
        @foreach($upload_test as $upl)
        <tr>
            <td>{{ $upl->id }}</td>
            <td><img width="150px" src="{{ url('/img/'.$upl->file) }}"></td>
            <td>{{ $upl->keterangan }}</td>
            <td>{{ $upl->created_at }}</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>