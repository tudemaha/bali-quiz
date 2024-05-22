@extends('layouts.main')

@section('body')
<link rel="stylesheet" href="/../css/style.css">
<section id="result" class="background-full">
  <div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
      <div class="col-md-5">
        <div class="card mt-5">
          <div class="card-body text-center">
            <h2 class="card-title fw-bold">Result</h2>
            <p class="text-center score fw-bold">{{ $score / $total * 100 }}</p>
            <p class="card-text mb-3">Kamu berhasil menjawab {{ $score }} dari {{ $total }} dengan benar.</p>
            <a href="/" class="btn btn-warning mb-1">Kembali ke Beranda</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection