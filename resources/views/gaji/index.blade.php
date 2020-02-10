<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <center>Daftar Manusia </center>
        <table border = '1'>

            <tr>
                <thead>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gaji as $gajih )
                <tr>
                    <td>{{ $gajih->nip }}</td>
                    <td>{{ $gajih->nama }}</td>
                    <td>{{ $gajih->jenis_kelamin }}</td>
                    <td>{{ $gajih->jabatan }}</td>
                    <td><a href="/gajih/{{ $gajih->id }}">Lihat</a></td>
                </tr>
                @endforeach
            </tbody>
            <table>
</body>
</html>
