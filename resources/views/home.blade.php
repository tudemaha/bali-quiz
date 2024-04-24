@extends('layouts.main')

@section('container')
	<div class="row vh-100 align-items-center justify-content-center hero">
			<div class="col text-center text-light hero-text">
				<h1 id="header"">BaliQuiz</h1>
				<p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore id laborum laboriosam at quia quidem corrupti similique facilis voluptas? Iure exercitationem, velit dignissimos nesciunt debitis nisi rerum fuga doloribus accusamus.</p>
			</div>
		</div>
	</div>

	<div id="instruction">
		<div class="row justify-content-around align-items-center pt-5 pb-5">
			<div class="col-md-6">
				<h2 class="fs-2 text-center">Petunjuk</h2>
				<ol class="mt-4 mt-md-0">
					<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium praesentium, laborum fugiat corrupti neque illum qui sint quibusdam sunt tempore nihil inventore explicabo repellendus aut ipsam alias reiciendis non porro.</li>
					<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat corporis fugit deserunt? Reiciendis a doloribus, quam voluptatibus porro explicabo dolorem aspernatur ipsam laboriosam nihil ipsa non corrupti, voluptas quod?</li>
					<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo doloribus iusto, officiis consequatur laudantium expedita dignissimos, soluta consectetur earum, vitae eum laborum omnis fuga non vero a voluptatem quo corrupti.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate deserunt, excepturi voluptatem unde veniam repellendus animi eum minima voluptas ea, suscipit iure eligendi voluptates repudiandae sed quasi? Error, harum nulla?</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex accusamus consectetur pariatur dolorem sunt dolor aliquid? A eaque sint illum quasi reiciendis officia velit itaque. Maiores pariatur minus nemo quis.</li>
				</ol>
			</div>
			<div class="col-md-4 pt-4">
				<img src="/img/example.jpeg" class="section-img img-fluid" alt="instruction-image">
			</div>
		</div>
	</div>

	<div id="goal" class="bg-theme-secondary">
		<div class="row justify-content-center align-items-center pt-5 pb-5">
			<div class="col-md-10 text-center">
				<h2 class="fs-2">Tujuan</h2>
				<p class="mt-4">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quasi odio, nesciunt, est quos error provident nobis adipisci dolorum laudantium rem quod? Optio laboriosam nihil quas suscipit labore itaque molestiae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quasi odio, nesciunt, est quos error provident nobis adipisci dolorum laudantium rem quod? Optio laboriosam nihil quas suscipit labore itaque molestiae!
				</p>
			</div>
		</div>
	</div>

	<footer class="bg-theme-secondary">
		<div class="row justify-content-center py-3 mt-2">
			<div class="col text-center">
				Copyright &copy; 2024 | All Right Reserved
			</div>
		</div>
	</footer>
@endsection