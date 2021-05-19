@extends('layout/template')

@section('title', 'Halaman Hewan')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center mt-3">
      <h1>Detail Animals</h1>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$hewan->nama_hewan}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$hewan->jenis_hewan}}</h6>
          <p class="card-text">{{$hewan->status_kehidupan}}</p>

          <a href="/hewan" class="card-link btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
