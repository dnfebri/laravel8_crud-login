@extends('layout/template')

@section('title', 'Halaman About')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center mt-3">
      <h1>Halaman Abaut</h1>
      <h3><?= $nama; ?></h3>
    </div>
  </div>
</div>
@endsection