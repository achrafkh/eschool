<!DOCTYPE html>
<html>
	@include('layouts.partials.header')
	<body>
		<header>
			<div class="tools">
				<div class="container">
					<ul class="pull-left">
						<li><a href="tel:1800123456"><i class="fa fa-phone"></i><span>1800-123-456</span></a></li>
						<li><a href="http://www.coffeecreamthemes.com/cdn-cgi/l/email-protection#e0898e868fa0938d819294978199ce838f8d"><i class="fa fa-envelope"></i><span><span class="__cf_email__" data-cfemail="660f08000926150b07141211071f4805090b">TEST@TEST.com</span></span></a></li>
					</ul>
					<nav class="pull-right">
						<ul>
							<li><a href="{{ url('/login') }}"><i class="fa fa-user"></i><span>Register</span></a></li>
							<li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i><span>Log In</span></a></li>
						</ul>
					</nav>
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
						<a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="{{ config('app.name') }}" class="img-responsive logo" /></a>
					</div>
					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html">Home</a></li>
							<li class="dropdown"><a href="{{ url('/login') }}" class="dropdown-toggle" data-toggle="dropdown">Courses<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="courses-list-left-sidebar.html">Courses List - Left Sidebar</a></li>
								<li><a href="courses-list-right-sidebar.html">Courses List - Right Sidebar</a></li>
								<li class="divider"></li>
								<li><a href="courses-details-left-sidebar.html">Course Details - Left Sidebar</a></li>
								<li><a href="courses-details-right-sidebar.html">Course Details - Right Sidebar</a></li>
								<li class="divider"></li>
								<li><a href="upcoming-exams-grid.html">Upcoming Exams - Grid</a></li>
								<li><a href="upcoming-exams-left-sidebar.html">Upcoming Exams - Left Sidebar</a></li>
								<li><a href="upcoming-exams-right-sidebar.html">Upcoming Exams - Right Sidebar</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="dropdown"><a href="{{ url('/login') }}" class="dropdown-toggle" data-toggle="dropdown">Teachers<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="teachers-list.html">Teachers List</a></li>
							<li><a href="teachers-profile.html">Teacher's Profile</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="{{ url('/login') }}" class="dropdown-toggle" data-toggle="dropdown">Blog<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="blog-list-full-width.html">Blog List - Full Width</a></li>
						<li><a href="blog-list-left-sidebar.html">Blog List - Left Sidebar</a></li>
						<li><a href="blog-list-right-sidebar.html">Blog List - Right Sidebar</a></li>
						<li class="divider"></li>
						<li><a href="blog-masonry-2-columns.html">Blog Masonry - 2 Columns</a></li>
						<li><a href="blog-masonry-3-columns.html">Blog Masonry - 3 Columns</a></li>
						<li><a href="blog-masonry-4-columns.html">Blog Masonry - 4 Columns</a></li>
						<li class="divider"></li>
						<li><a href="blog-article-full-width.html">Blog Article - Full Width</a></li>
						<li><a href="blog-article-left-sidebar.html">Blog Article - Left Sidebar</a></li>
						<li><a href="blog-article-right-sidebar.html">Blog Article - Right Sidebar</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="{{ url('/login') }}" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="gallery-3-columns.html">3 Columns Gallery</a></li>
					<li><a href="gallery-4-columns.html">4 Columns Gallery</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>
</div>
</div>
</header>
<div class="title">
<div class="title-image"></div>
<div class="container">
<div class="row">
	<div class="col-sm-12 text-center">
		Log In
	</div>
</div>
</div>
</div>
<section id="content">
<div class="container">
<div class="row">
	<div class="col-sm-6">
		<h1>Log In</h1>
		<h3>Already a Member? Log in here.</h3>
		<form role="form" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}" id="login-login-group">
				<label for="login-input-login">Login</label>
				<div class="input-group">
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
					<div class="input-group-addon"><i class="fa fa-user"></i>
						
					</div>
				</div>
				@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group" id="login-password-group">
				<label for="login-input-password">Password</label>
				<div class="input-group">
					<input id="password" type="password" class="form-control" name="password" required>
					<div class="input-group-addon"><i class="fa fa-lock"></i>
						
					</div>
				</div>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
				</label>
			</div>
			<button type="submit" class="btn btn-primary">
			Login
			</button>
			<a class="pull-right" href="{{ route('password.request') }}">
				Forgot Your Password?
			</a>
		</form>
	</div>
	<div class="col-sm-6">
		<h1>Register</h1>
		<h3>Do not have an account? Register here.</h3>
		<form role="form" method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label for="register-input-email">Name</label>
				<div class="input-group">
					<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Jhon doe">
					<div class="input-group-addon"><i class="fa fa-envelope"></i>
					</div>
				</div>
				@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('emaill') ? ' has-error' : '' }}">
				<label for="register-input-email">Email</label>
				<div class="input-group">
					<input id="email" type="text" class="form-control" name="emaill" value="{{ old('emaill') }}" required autofocus placeholder="example@test.com">
					<div class="input-group-addon"><i class="fa fa-envelope"></i>
						
					</div>
					
				</div>
				@if ($errors->has('emaill'))
				<span class="help-block">
					<strong>{{ $errors->first('emaill') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label for="register-input-password">Password</label>
				<div class="input-group">
					<input id="password" type="password" class="form-control" name="password" required>
					<div class="input-group-addon"><i class="fa fa-envelope"></i>
					</div>
					
				</div>
				@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label for="register-input-password">Confirm Password</label>
				<div class="input-group">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
					<div class="input-group-addon"><i class="fa fa-envelope"></i>
						
					</div>
					
				</div>
				@if ($errors->has('password'))
				<span class="help-block">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
		</form>
	</div>
</div>
</div>
</section>
<div id="prefooter">
<div class="container">
<div class="row">
	<div class="col-sm-6">
		<h3>About Us</h3>
		<div class="row">
			<div class="col-sm-5">
				<p><img src="images/prefooter-about.jpg" alt="" class="img-responsive" /></p>
			</div>
			<div class="col-sm-7">
				<p>Morbi nec quam sed elit pharetra faucibus. Cras vel massa viverra ligula suscipit interdum eget nec est. Cras nibh mi, faucibus at ligula eu, eleifend tincidunt justo. Nunc porttitor massa at nisi condimentum fringilla. Nullam finibus, nibh eu hendrerit suscipit, tellus mi commodo lectus, sit amet dictum sem lorem sed neque.<br>
					<a href="{{ url('/login') }}">Read More <i class="fa fa-angle-right"></i></a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<h3>Apply for a Teacher</h3>
			<form role="form" name="teacher-form" id="teacher-form" action="http://www.coffeecreamthemes.com/themes/smartway/site/process-teacher.php">
				<div class="form-group" id="teacher-name-group">
					<div class="input-group">
						<input type="text" class="form-control" id="teacher-input-name" placeholder="Name">
						<div class="input-group-addon"><i class="fa fa-user"></i></div>
					</div>
				</div>
				<div class="form-group" id="teacher-email-group">
					<div class="input-group">
						<input type="email" class="form-control" id="teacher-input-email" placeholder="Email">
						<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
					</div>
				</div>
				<div class="form-group" id="teacher-phone-group">
					<div class="input-group">
						<input type="text" class="form-control" id="teacher-input-phone" placeholder="Phone">
						<div class="input-group-addon"><i class="fa fa-phone"></i></div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="col-sm-3">
			<h3>Contact</h3>
			<p>Smartway Learning Centre<br>
				8699 Santa Monica Blvd<br>
			Los Angeles, CA 90069-4109</p>
			<p>Phone: <a href="tel:1800123456">1800-123-456</a><br>
			Fax: <a href="tel:1800123456">1800-123-456</a><br>
			Email: <a href="http://www.coffeecreamthemes.com/cdn-cgi/l/email-protection#c4adaaa2ab84b7a9a5b6b0b3a5bdeaa7aba9"><span class="__cf_email__" data-cfemail="b3daddd5dcf3c0ded2c1c7c4d2ca9dd0dcde">[email&#160;protected]</span></a></p>
			<p><a href="contact.html">Get Directions <i class="fa fa-angle-right"></i></a></p>
		</div>
	</div>
</div>
</div>
@include('layouts.partials.footer')
@include('layouts.partials.scripts')
</body>
</html>