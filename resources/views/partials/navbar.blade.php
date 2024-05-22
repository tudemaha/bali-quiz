<nav class="navbar fixed-top navbar-expand-lg bg-warning">
	<div class="container">
		<a class="navbar-brand" href="/">BaliQuiz</a>
    <?php $excludedTitle = collect(['Login', 'Register', 'Quiz']) ?>
		@if(!$excludedTitle->contains($title))
      <div class="navbar-nav ms-auto d-inline">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              @if(auth()->user()->master_role_id == 1)
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              @else
                <li><a class="dropdown-item" href="/quiz">Quiz</a></li>
              @endif
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </ul>
          </li>
        @else
          <a class="btn btn-dark" href="/login"></i> Login</a>
          <a class="btn btn-outline-dark ms-2" href="/register">Register</a>
        @endauth
      </div>
		@endif
	</div>
</nav>