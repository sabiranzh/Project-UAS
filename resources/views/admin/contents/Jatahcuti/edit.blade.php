@extends('admin.main')
@section('content')

<div class="pagetitle">
    <h1>Edit Jatah Cuti</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jatah Cuti</li>
        <li class="breadcrumb-item active">Edit Jatah Cuti</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
        <form action="{{ route('jatahcuti.update', $jatahcuti->id) }}" method="post" class="mt-3">
    @csrf
    @method('PUT')
        <div class="mb-2">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="date" name="tahun" id="tahun" class="form-control" value="{{ $jatahcuti->tahun ?? '' }}" required>
        </div>

        <div class="mb-2">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah" class="form-control" value="{{ $jatahcuti->jumlah ?? '' }}" required>
         </div>

        <div class="mb-2">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" name="nip" id="nip" class="form-control" value="{{ $jatahcuti->nip ?? '' }}" required>
        </div>

        <div class="mb-4">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
            </form>
        </div>
    </div>
</section>

@endsection
