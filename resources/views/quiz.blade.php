@extends('layouts.main')

@section('body')
  <section id="quiz" class="background-full">
    <div class="container-fluid vh-100 d-flex flex-column">
      <div id="progress-counter" class="row">
        <div class="col-2 col-md-1 d-grid text-center">
          <span class="fw-bold fs-3 d-grid align-items-center" id="counter"></span>
        </div>
        <div class="col-10 col-md-11">
          <div class="progress" role="progressbar" aria-label="Quiz timer" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="height: 2.5rem">
            <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated"></div>
          </div>
        </div>
      </div>
      <div class="row" style="display: flex; align-items: center; justify-content: center; flex-grow: 1">
        <div class="col-10 text-center" >
          <span class="text-white fs-3 fw-bolder" id="question"></span>
        </div>
      </div>
      <div class="container mb-4">
        <div class="row justify-content-center g-3" id="answers"></div>
      </div>
    </div>
  </section>
  

  <script >
    const questions = {!! $questions !!};
    const test_id = {{ $test_id }}
    const questions_raw = JSON.stringify(questions);
    if(!sessionStorage.getItem('questions')) {
      sessionStorage.setItem('questions', questions_raw);
    }
    if(!sessionStorage.getItem('current_num')) {
      sessionStorage.setItem('current_num', 1);
    }
    if(!sessionStorage.getItem('test_id')) {
      sessionStorage.setItem('test_id', test_id);
    }
  </script>

  <script src="js/quiz.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection