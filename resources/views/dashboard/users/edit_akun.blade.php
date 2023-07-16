@extends('dashboard.layouts.main')

@section('container')
 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Akun {{ auth()->user()->name }}</h1>
</div>

@if(session()->has('failed'))
<div class="alert alert-danger col-lg-8" role="alert">
  {{ session('failed') }}
</div>
@endif

<div class="col-lg-8">
    <form method="POST" action="/users/update_akun" class="mb-5"> 
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name' , auth()->user()->name) }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username' , auth()->user()->username)}}">
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required value="{{ old('email' , auth()->user()->email)}}" disabled>
          <input type="hidden" class="form-control" id="hidden" name="email" required value="{{ old('email' , auth()->user()->email)}}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Update Akun</button>
    </form>
</div>
@endsection