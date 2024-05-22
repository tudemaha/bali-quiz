@extends('layouts.main')

@section('body')
  <section id="dashboard">
    <div class="container mt-5 pt-4">
      <div class="row mt-2 justify-content-center">
        <div class="col-md-8">
          <h3 class="text-center fw-bold">Quiz Recap</h3>
          <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nilai</th>
                <th scope="col">Benar</th>
                <th scope="col">Terjawab</th>
                <th scope="col">Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tests as $test)    
                <tr>
                  <th scope="row">{{ $loop->iteration + ($tests->perPage() * ($tests->currentPage() - 1)) }}</th>
                  <td>{{ $test->user->name }}</td>
                  <td>{{ $test->score / $total * 100 }}</td>
                  <td>{{ $test->score }}</td>
                  <td>{{ $test->answered . ' / ' . $total }}</td>
                  <td>{{ $test->created_at }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $tests->links() }}
        </div>
      </div>
    </div>
  </section>
@endsection