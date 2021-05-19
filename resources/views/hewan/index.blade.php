@extends('layout/template')

@section('title', 'Halaman Hewan')

@section('container')
<div class="container">
  <div class="row">
    <div class="col text-center mt-3">
      <h1>Daftar Hewan</h1>
    </div>
  </div>
  
  <a href="/hewan/create" class="btn btn-primary my-3">Tambah Hewan</a>

  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

  <div class="row justify-content-evenly mt-3">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Hewan</th>
          <th scope="col">Jenis Hewan</th>
          <th scope="col">Status Kehidupan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($hewan as $h)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $h->nama_hewan }}</td>
          <td>{{ $h->jenis_hewan }}</td>
          <td>{{ $h->status_kehidupan }}</td>
          <td>
            <a href="/hewan/{{ $h->id }}" class="badge bg-primary">Detail</a>
            <a href="/hewan/{{ $h->id }}/edit" class="badge bg-success">Ubah</a>
            {{-- <a href="#" class="badge bg-danger">Hapus</a> --}}
            <form action="/hewan/{{ $h->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="badge bg-danger btn text-decoration-underline" id="btn-hapus">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>

</div>
@endsection
