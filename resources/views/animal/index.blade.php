@extends('layout/template')

@section('title', 'Halaman Hewan')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center mt-3">
      <h1>Daftar Animals</h1>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6">

      <a href="/animals/create" class="btn btn-primary my-3">Tambah Animal</a>
      
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif

      @foreach($animals as $animal)
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">{{ $animal->nama_hewan }}</div>
        </div>
        <a href="/animals/{{ $animal->id }}" class="badge bg-primary rounded-pill">Detail</a>
      </li>
      @endforeach
    </div>
  </div>

</div>
@endsection
