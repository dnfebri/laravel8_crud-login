@extends('layout/template')

@section('title', 'Halaman Hewan')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center mt-3">
      <h1>Tambah Data Hewan</h1>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-8">
      <form action="/hewan" method="post">
        @csrf
        <div class="mb-3">
          <label for="nama_hewan" class="form-label">Nama Hewan</label>
          <input type="text" class="form-control @error('nama_hewan') is-invalid @enderror" id="nama_hewan" name="nama_hewan" value="{{ old('nama_hewan') }}" placeholder="Nama Hewan">
          @error('nama_hewan')
          <div id="nama_hewan" class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="jenis_hewan" class="form-label">Jenis Hewan</label>
          <input type="text" class="form-control @error('jenis_hewan') is-invalid @enderror" id="jenis_hewan" name="jenis_hewan" value="{{ old('jenis_hewan') }}" placeholder="Jenis Hewan">
          @error('jenis_hewan')
          <div id="jenis_hewan" class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="status_kehidupan" class="form-label">Status Kehidupan</label>
          <input type="text" class="form-control @error('status_kehidupan') is-invalid @enderror" id="status_kehidupan" name="status_kehidupan" value="{{ old('status_kehidupan') }}" placeholder="Status Kehidupan">
          @error('status_kehidupan')
          <div id="status_kehidupan" class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>

</div>
@endsection
