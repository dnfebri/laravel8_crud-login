@extends('layout/template_auth', ['title' => 'Change Password'])

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-5 position-absolute top-50 start-50 translate-middle">

         {{-- <form class="form-signin" style="padding: 30px;" method="post" id="login-form"> --}}
         <form class="form-signin bg-white" style="padding: 30px;" method="POST" action="{{ route('password.edit') }}">
            @method('patch')
            @csrf
            <div class="row">
               <div class="col">
                  <h1 class="d-inline">Ubah Password</h1>
               </div>
               <div class="col-auto position-relative">
                  <div class=" position-absolute bottom-0 end-0">
                     <a class="d-inline text-decoration-none text-end pt-3" href="{{url('/')}}">Home</a>
                  </div>
               </div>
            </div>
            <hr />
            {{-- @if(session('error'))
            <div class="alert alert-danger" role="alert">
               {{session('error')}}
      </div>
      @endif --}}

      <div class="input-group mb-3">
         <input style="border-radius: 0px;" class="form-control @error('old_password') is-invalid @enderror"
            placeholder="Password Lama" name="old_password" id="old_password" type="password">
         <span class="input-group-text" id="old_password"><i class="bi bi-lock-fill"></i></span>
         @error('old_password')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
         @enderror
      </div>

      <div class="input-group mb-3">
         <input style="border-radius: 0px;" class="form-control @error('password') is-invalid @enderror"
            placeholder="New Password" name="password" id="password" type="password">
         <span class="input-group-text" id="password"><i class="bi bi-lock-fill"></i></span>
         @error('password')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
         @enderror
      </div>

      <div class="input-group mb-3">
         <input style="border-radius: 0px;" class="form-control" placeholder="Confirm Password"
            name="password_confirmation" id="password_confirmation" type="password">
         <span class="input-group-text" id="password_confirmation"><i class="bi bi-lock-fill"></i></span>
         @error('password_confirmation')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
         @enderror
      </div>


      <hr />
      <div class="form-group text-center">
         <button type="submit" id="submit" class="btn btn-outline-dark">
            {{-- <i class="bi bi-box-arrow-in-right"></i> --}}
            Ubah
         </button>
      </div>
      </form>
   </div>
</div>
</div>
@endsection