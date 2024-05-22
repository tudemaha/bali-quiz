@extends('layouts.main')

@section('body')
  <section id="register" class="background-full">
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-md-5">
          <div class="card mt-5">
            <div class="card-body">
              <h2 class="card-title fw-bold text-center">Register</h2>
              <p class="card-text mb-4">Silakan register untuk membuat akun baru</p>
              <form class="d-grid" action="/register" method="POST">
                @csrf
                <div class="form-floating mb-3">
                  <input 
                    type="text"
                    class="form-control @error('username') is-invalid @enderror"
                    id="username"
                    name="username"
                    placeholder="Username"
                    value="{{ old('username') }}"
                    min="4"
                    autofocus
                    required
                  >
                  <label for="username" class="form-label">Username</label>
                  @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    name="name"
                    placeholder="Nama"
                    value="{{ old('name') }}""
                    required
                  >
                  <label for="name" class="form-label">Nama</label>
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="password"
                    class="form-control @error('password') is-invalid @enderror"
                    id="password"
                    name="password"
                    placeholder="Password"
                    min="8"
                    required
                  >
                  <label for="password" class="form-label">Password</label>
                  @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="password"
                    class="form-control @error('password-repeat') is-invalid @enderror"
                    id="password-repeat"
                    name="password-repeat"
                    placeholder="Ulangi Password"
                    min="8"
                    required
                  >
                  <label for="password" class="form-label">Ulangi Password</label>
                  @error('password-repeat')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <p class="card-text mb-4">Sudah punya akun? <a href="/login" class="link-underline-warning text-warning link-underline-opacity-0 link-underline-opacity-75-hover">Login</a></p>
                <button type="submit" class="btn btn-warning mb-1">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection