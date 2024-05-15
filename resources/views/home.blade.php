@extends('layouts.main')

@section('body')
  <section id="hero" class="mt-4 background-full">
    <div class="container">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col text-center hero-text">
          <h1 id="header" class="text-white">BaliQuiz</h1>
          <p class="fs-5 text-white text-opacity-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore id laborum laboriosam at quia quidem corrupti similique facilis voluptas? Iure exercitationem, velit dignissimos nesciunt debitis nisi rerum fuga doloribus accusamus.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="instruction">
    <div class="container py-5">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-6">
          <h1 class="text-black fw-bold">Petunjuk</h1>
          <ol class="pt-1 text-black text-opacity-75">
            <li class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium praesentium, laborum fugiat corrupti neque illum qui sint quibusdam sunt tempore nihil inventore explicabo repellendus aut ipsam alias reiciendis non porro.</li>
            <li class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat corporis fugit deserunt? Reiciendis a doloribus, quam voluptatibus porro explicabo dolorem aspernatur ipsam laboriosam nihil ipsa non corrupti, voluptas quod?</li>
            <li class="pt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloribus iusto, officiis consequatur laudantium expedita dignissimos, soluta consectetur earum, vitae eum laborum omnis fuga non vero a voluptatem quo corrupti.</li>
            <li class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate deserunt, excepturi voluptatem unde veniam repellendus animi eum minima voluptas ea, suscipit iure eligendi voluptates repudiandae sed quasi? Error, harum nulla?</li>
            <li class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex accusamus consectetur pariatur dolorem sunt dolor aliquid? A eaque sint illum quasi reiciendis officia velit itaque. Maiores pariatur minus nemo quis.</li>
          </ol>
        </div>
        <div class="mt-4 mt-md-0 col-md-5">
          <img src="/img/example.jpeg" class="section-img img-fluid" alt="instruction-image">
        </div>
      </div>
    </div>
  </section>

  <section id="goal" class="bg-theme-secondary">
    <div class="container py-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10 text-center">
          <h1 class="text-black fw-bold">Tujuan</h1>
          <p class="mt-4 text-black text-opacity-75">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quasi odio, nesciunt, est quos error provident nobis adipisci dolorum laudantium rem quod? Optio laboriosam nihil quas suscipit labore itaque molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quasi odio, nesciunt, est quos error provident nobis adipisci dolorum laudantium rem quod? Optio laboriosam nihil quas suscipit labore itaque molestiae!
          </p>
        </div>
      </div>
    </div>

  @include('partials.footer')

  <script src="js/index.js"></script>
@endsection