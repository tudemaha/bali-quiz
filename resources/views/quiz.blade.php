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
            <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="row" style="display: flex; align-items: center; justify-content: center; flex-grow: 1">
        <div class="col-10 text-center" >
          <span class="text-white fs-3 fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium praesentium, laborum fugiat qui sint quibusdam?</span>
        </div>
      </div>
      <div class="container mb-4">
        <div class="row justify-content-center g-3">
          <div class="col-6 col-md-3 d-grid">
            <button class="btn btn-primary btn-lg">test button 1</button>
          </div>
          <div class="col-6 col-md-3 d-grid">
            <button class="btn btn-primary btn-lg">test button 2</button>
          </div>
          <div class="col-6 col-md-3 d-grid">
            <button class="btn btn-primary btn-lg">test button 3</button>
          </div>
          <div class="col-6 col-md-3 d-grid">
            <button class="btn btn-primary btn-lg">button 4</button>
          </div>
        </div>
      </div>
    </div>
  </section>

<script src="js/quiz.js"></script>
@endsection