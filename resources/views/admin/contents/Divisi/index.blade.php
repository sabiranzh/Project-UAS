@extends('admin.main')
@section('content')
<div class="container">
    <h2>Divisi</h2>
    <a href="/Divisi/create.blade.php" class="btn btn-primary my-2">+ Divisi</a>
    <table class="table">
    <tr>
        <th>No</th>
        <th>Nama Divisi</th>
        <th>Manager</th>
        <th>Action</th>
    </tr>

    <?php
    $no = 0;
    foreach($divisi as $divisi):
    ?>


                <tr>
                    <td><?= $no += 1?></td>
                    <td>{{$divisi->nama}}</td>
                    <td>{{$divisi->manager}}</td>
                </tr>
    @endforeach
    </table>
  </section>
</div>
@endsection
