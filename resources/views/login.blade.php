@extends('layouts.main')

@section('body')
  <section id="hero">
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-md-5">
          <div class="card mt-5">
            <div class="card-body">
              <h2 class="card-title fw-bold">Login</h2>
              <p class="card-text mb-1">Silakan login untuk mengakses kuis</p>
              <p class="card-text mb-4">Belum punya akun? <a href="/register" class="link-underline-warning text-warning link-underline-opacity-0 link-underline-opacity-75-hover">Register</a></p>
              <form class="d-grid">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                  <label for="username" class="form-label">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                  <label for="password" class="form-label">Password</label>
                </div>
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