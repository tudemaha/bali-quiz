@extends('layouts.main')

@section('body')
  <section id="login" class="background-full">
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-md-5">
          <div class="card mt-5">
            <div class="card-body">
              <h2 class="card-title fw-bold text-center">Login</h2>
              @if(session()->has('success'))    
                <div class="alert alert-success alert-dismissible" role="alert">
                  <div>{{ session('success') }}</div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              @error('loginFailed')
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <div>{{ $message }}</div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @enderror
              <p class="card-text mb-4">Silakan login untuk mengakses kuis</p>
              <form class="d-grid" action="/login" method="POST">
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
                    required
                    autofocus
                  >
                  <label for="username" class="form-label">Username</label>
                  @error('username')
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
                <p class="card-text mb-4">Belum punya akun? <a href="/register" class="link-underline-warning text-warning link-underline-opacity-0 link-underline-opacity-75-hover">Register</a></p>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="remember-me">
                  <label for="remember-me">Ingat saya</label>
                </div>
                <button type="submit" class="btn btn-warning mb-1">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection