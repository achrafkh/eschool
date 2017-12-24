<header>
	<div class="tools">
		<div class="container">
			<ul class="pull-left">
				<li><a href="tel:1800123456"><i class="fa fa-phone"></i><span>1800-123-456</span></a></li>
				<li><a href="http://www.coffeecreamthemes.com/cdn-cgi/l/email-protection#aec7c0c8c1eeddc3cfdcdad9cfd780cdc1c3"><i class="fa fa-envelope"></i><span><span class="__cf_email__" data-cfemail="1f767179705f6c727e6d6b687e66317c7072">[email&#160;protected]</span></span></a></li>
			</ul>
			@if(auth()->guest())
			<nav class="pull-right">
				<ul>
					<li><a href="{{ url('/login') }}"><i class="fa fa-user"></i><span>Register</span></a></li>
					<li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i><span>Log In</span></a></li>
				</ul>
			</nav>
			@else

			<nav class="pull-right">
				<ul>
					<li><a href="{{ url('/mycourses') }}"><i class="fa fa-user"></i><span>My courses</span></a></li>
					@if(auth()->user()->isAdmin())
					<li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-cog"></i><span>Administration</span></a></li>
					@endif
				</ul>
			</nav>

			@endif
		</div>
	</div>
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand"><img src="/images/logo.png" alt="{{ config('app.name') }}" class="img-responsive logo" /></a>
			</div>
			<nav class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="{{url('/') }}">Home</a></li>
					<li class=""><a href="{{url('/home') }}" >Browse</a></li>
				</li>
				<li><a href="{{ url('about') }}">About</a></li>
				
			
	<li><a href="{{ url('contact') }}">Contact</a></li>
</ul>
</nav>
</div>
</div>
</header>