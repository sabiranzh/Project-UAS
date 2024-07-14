@extends('admin.main')
@section('content')
<div class="container">
    
    <h2>Data Pengajuan Cuti</h2>
    <a href="{{ route('pengajuancuti.create') }}" class="btn btn-primary my-2">+ Pengajuan Cuti</a>

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nip</th>
            <th>Tanggal awal</th>
            <th>Tanggal akhir</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Status</th>
        </tr>
        
        @foreach($pengajuancuti as $key => $pengajuan)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $pengajuan->nama }}</td>
            <td>{{ $pengajuan->nip }}</td>
            <td>{{ $pengajuan->tanggal_awal }}</td>
            <td>{{ $pengajuan->tanggal_akhir }}</td>
            <td>{{ $pengajuan->jumlah }}</td>
            <td>{{ $pengajuan->ket }}</td>
            <td>{{ $pengajuan->status }}</td>
        </tr>
        @endforeach
    </table>
    
</div>
@endsection
