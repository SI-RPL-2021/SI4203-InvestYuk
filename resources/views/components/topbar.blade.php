<!-- TO DO: complete our navbar and headbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="app-navbar-collapse">
			<ul class="nav justify-content-align">
				<a class="navbar-brand" href="{{ route('home') }}">
				<img src="https://cdn.icon-icons.com/icons2/1312/PNG/512/01-8_86385.png" alt="" width="30" height="30" class="d-inline-block align-top">
				Invest Yuk!
				</a>
			</ul>
		</div>
			
		<!-- Right Side Of Navbar -->
		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="app-navbar-collapse">
			<ul class="nav navbar-nav ml-auto">
				<!-- Authentication Links -->
				@if (Auth::guest())
					<li class="ml-3"><a class="text-light" href="{{ route('login.create') }}">Login</a></li>
					<li class="ml-3 mr-3"><a class="text-light" href="{{ route('register.create') }}">Register</a></li>
				@else
					<li class="ml-3"><a class="text-light" href="{{ route('courses') }}">Learning</a></li>
					<li class="ml-3 mr-3 nav-item dropdown">
						<a href="#" class="dropdown-toggle text-light" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-dark" href="{{ route('dashboard') }}">Dashboard</a>
							<a class="dropdown-item text-dark" href="{{ route('logout') }}"
								onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</li>
				@endif
			</ul>
		</div>
</nav>