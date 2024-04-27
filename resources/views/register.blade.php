@extends('layouts.main')

@section('body')
  <section id="hero">
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-md-5">
          <div class="card mt-5">
            <div class="card-body">
              <h2 class="card-title fw-bold">Register</h2>
              <p class="card-text mb-1">Silakan register untuk membuat akun baru</p>
              <p class="card-text mb-4">Sudah punya akun? <a href="/login" class="link-underline-warning text-warning link-underline-opacity-0 link-underline-opacity-75-hover">Login</a></p>
              <form class="d-grid">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                  <label for="username" class="form-label">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                  <label for="name" class="form-label">Nama</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                  <label for="password" class="form-label">Password</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" name="password-repeat" placeholder="" required>
                  <label for="password" class="form-label">Ulangi Password</label>
                </div>
                <button type="submit" class="btn btn-warning mb-1">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection