@extends('layout/template_auth', ['title' => 'Login'])

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <!-- <div class="col-xs-12 col-md-4 col-md-offset-4" id="form-login"> -->
      <div class="col-md-5" id="form-login">
         {{-- <form class="form-signin" style="padding: 30px;" method="post" id="login-form"> --}}
         <form class="form-signin" style="padding: 30px;" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
               <div class="col">
                  <h1 class="d-inline">Login</h1>
               </div>
               <div class="col-auto position-relative">
                  <div class=" position-absolute bottom-0 end-0">
                     <a class="d-inline text-decoration-none text-end pt-3" href="{{url('register')}}">Registrasi</a>
                  </div>
               </div>
            </div>
            <hr />
            <div id="pesan">
               <!-- error will be shown here ! -->
            </div>
            <div class="input-group mb-3">
               <input style="border-radius: 0px;"
                  class="d-inline-block form-control @error('email') is-invalid @enderror" placeholder="email"
                  name="email" id="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                  autofocus>
               <span class="input-group-text" id="email"><i
                     class="bi bi-envelope-fill form-control-feedback"></i></span>
               @error('email')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>

            <div class="input-group mb-3">
               <input style="border-radius: 0px;" class="form-control @error('password') is-invalid @enderror"
                  placeholder="Password" name="password" id="password" type="password" required
                  autocomplete="current-password">
               <span class="input-group-text" id="password"><i class="bi bi-key-fill"></i></span>
               @error('password')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>

            <hr />

            <div class="form-group text-center">
               <button type="submit" id="submit" class="btn btn-outline-dark">
                  <i class="bi bi-box-arrow-in-right"></i>
                  Masuk
               </button>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection