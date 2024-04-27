<nav class="navbar fixed-top navbar-expand-lg bg-warning">
	<div class="container">
		<a class="navbar-brand" href="/">BaliQuiz</a>
		@if($title != "Login" && $title != "Register")
			<div class="navbar-nav ms-auto d-inline">
				<a class="btn btn-dark" href="/login"></i> Login</a>
				<a class="btn btn-outline-dark ms-2" href="/register">Register</a>
			</div>
		@endif
	</div>
</nav>