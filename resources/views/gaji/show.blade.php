<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Show Buku</legend>

        Nis : <b> {{ $gaji->nip }}</b><br>
        Nama : <b> {{ $gaji->nama }}</b><br>
        Jenis Kelamin : <b> {{ $gaji->jenis_kelamin }}</b><br>
        Jabatan : <b> {{ $gaji->jabatan }}</b><br>

    @if ($gaji->jabatan == "manager")
    @php $status = 5000000 @endphp
    @elseif ($gaji->jabatan == "sekretaris")
    @php $status =3500000 @endphp
    @else
    @php $status = 2500000 @endphp
    @endif
    gaji : <b>{{ $status }} <br></b>


    @if ($gaji->jam_kerja > 100)
    @php $total = $status*5/100 @endphp
    @elseif ($gaji->jam_kerja > 200)
    @php $total = $status*7.5/100 @endphp
    @else
    @php $total = $status*10/100 @endphp
    @endif
    Upah : <b>{{ $total }}</b>
     <br>
    Jam Kerja : <b>{{ $gaji->jam_kerja }}</b>
    </fieldset>

</body>
</html>
