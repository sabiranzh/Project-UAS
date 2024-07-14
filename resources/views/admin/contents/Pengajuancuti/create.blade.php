@extends('admin.main')
@section('content')

<div class="pagetitle">
    <h1>Pengajuan Cuti</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pengajuan Cuti</li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pengajuancuti.store') }}" method="post" class="mt-3">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div> <br>

                <div class="mb-2">
                    <label for="nip" class="form-label">Nip</label>
                    <input type="text" name="nip" id="nip" class="form-control" required>
                </div><br>

                <div class="mb-2">
                    <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                    <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control" required>
                </div><br>

                <div class="mb-2">
                    <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                    <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" required>
                </div><br>

                <div class="mb-2">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" id="jumlah" class="form-control" required>
                </div><br>

                <div class="mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" name="ket" id="ket" class="form-control">
                </div><br>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
