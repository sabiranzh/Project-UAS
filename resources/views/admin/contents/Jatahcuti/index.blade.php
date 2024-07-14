@extends('admin.main')
@section('content')
<div class="container">
    <h2>Rengkapan Jatah Cuti Pegawai</h2>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>NIP</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 0;
        foreach($jatahcuti as $jatahcuti):
        ?>
        <tr>
            <td><?= $no += 1?></td>
            <td>{{$jatahcuti->tahun}}</td>
            <td>{{$jatahcuti->jumlah}}</td>
            <td>{{$jatahcuti->nip}}</td>
            <td class="d-flex">
                <a href="{{ route('jatahcuti_edit', ['id' => $jatahcuti->id]) }}" class="btn btn-primary">
                    Edit Jatah Cuti
                </a>
                <form action="/Jatahcuti/delete/{{$jatahcuti->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
