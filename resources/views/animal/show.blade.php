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
          <h5 class="card-title">{{$animal->nama_hewan}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$animal->jenis_hewan}}</h6>
          <p class="card-text">{{$animal->status_kehidupan}}</p>

          <a href="/animals" class="card-link btn btn-warning">Kembali</a>
          <a href="/animals/{{ $animal->id }}/edit" class="btn btn-primary">Edit</a>
          <form action="/animals/{{ $animal->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
