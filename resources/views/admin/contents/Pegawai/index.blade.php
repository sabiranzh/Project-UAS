@extends('admin.main')
@section('content')

<html>
<head>
</head>
<body>
    <h2>Daftar Pegawai</h2>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Divisi</th>
        </tr>
        
        <?php
    $no = 0;
    foreach($pegawai as $pegawai):
    ?>


                <tr>
                    <td><?= $no += 1?></td>
                        <td>{{$pegawai->nip}}</td>
                        <td>{{$pegawai->nama}}</td>
                        <td>{{$pegawai->gender}}</td>
                        <td>{{$pegawai->tmp_lahir}}</td>
                        <td>{{$pegawai->tgl_lahir}}</td>
                        <td>{{$pegawai->telpon}}</td>
                        <td>{{$pegawai->alamat}}</td>
                        <td>{{$pegawai->divisi_id}}</td>
                        
                        
                    </tr>
                   
                        
                    @endforeach
        </table>

</body>
@endsection
