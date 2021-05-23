@extends('layout/template')

@section('title', 'Halaman Home')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center mt-3">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <h1>Halaman Home</h1>
    </div>
  </div>
</div>
@endsection