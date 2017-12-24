@extends('layouts.app')

@section('content')
@include('partials.page',['title'=> 'Single Course'])

<section id="content">
<div class="container">
<div class="row">
	<div class="col-sm-8">
	<div class="row">
		<h1>{{ $course->title }}</h1>
		<p>{!! $course->description !!}</p>
		<hr>
	</div>
		<div class="row">
		<h3>Videos</h3>
		@foreach($course->videos as $video)
			<h5 class="lesson-title">{{$video->title}}</h5>
			<div class="meta">
				<span><i class="fa fa-calendar"></i>{{ $video->created_at }}</span>
			</div>
			<p>{!! $video->description !!}</p>
			<hr>
		@endforeach
		</div>
	</div>
	<div class="col-sm-4">
		<div class="widget" data-scroll-reveal>
			<ul>
				<li class="price">
					Price <span class="pull-right">{{ $course->price }} TND</span>
				</li>
				
				<li class="course-data">
					<span class="icon icon-032"></span>
					<strong>Category</strong><span class="pull-right"> {{ $course->category->title }}</span>
				</li>
				<li class="course-data">
					<span class="icon icon-038"></span>
					<strong>Videos</strong><span class="pull-right"> {{ $course->videos->count() }}</span>
				</li>
			</ul>
			<p><a class="btn btn-primary take-course" data-toggle="modal" data-target="#myModal">Take This Course</a></p>
			
		</div>
	</div>
</div>
</section>
<section id="featured-posts" class="alt-background">
<div class="container">
	<h2 class="text-center carousel-title">
	Related Courses
	<a href="courses-details-right-sidebar.html#">View All Courses</a>
	</h2>
	<div class="owl-carousel">
		@foreach($related as $rcourse)
			<div class="item">
			<a href="/course/{{$rcourse->id}}"><img src="{{$rcourse->image}} " alt="" class="img-responsive" /></a>
			<h3><a href="/course/{{$rcourse->id}}">{{$rcourse->title}}</a></h3>
			<div class="meta">
				<p><a href="/course/{{$rcourse->id}}"><strong>Category</strong> : {{$rcourse->category->title}}</a></p>

				<p><a href="/course/{{$rcourse->id}}"><strong>Videos</strong> : {{$rcourse->videos->count()}}</a></p>
				
			</div>
			<div class="price">{{$rcourse->price}} TND</div>
		</div>
		@endforeach
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
					<p><img src="/images/prefooter-about.jpg" alt="" class="img-responsive" /></p>
				</div>
				<div class="col-sm-7">
					<p>Morbi nec quam sed elit pharetra faucibus. Cras vel massa viverra ligula suscipit interdum eget nec est. Cras nibh mi, faucibus at ligula eu, eleifend tincidunt justo. Nunc porttitor massa at nisi condimentum fringilla. Nullam finibus, nibh eu hendrerit suscipit, tellus mi commodo lectus, sit amet dictum sem lorem sed neque.<br>
						<a href="courses-details-right-sidebar.html#">Read More <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				
			</div>
			<div class="col-sm-3">
				<h3>Contact</h3>
				<p>Smartway Learning Centre<br>
					8699 Santa Monica Blvd<br>
				Los Angeles, CA 90069-4109</p>
				<p>Phone: <a href="tel:1800123456">1800-123-456</a><br>
				Fax: <a href="tel:1800123456">1800-123-456</a><br>
				Email: <a href="http://www.coffeecreamthemes.com/cdn-cgi/l/email-protection#640d0a020b24170905161013051d4a070b09"><span class="__cf_email__" data-cfemail="2c45424a436c5f414d5e585b4d55024f4341">[email&#160;protected]</span></a></p>
				<p><a href="contact.html">Get Directions <i class="fa fa-angle-right"></i></a></p>
			</div>
		</div>
	</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration details</h4>
      </div>
      <div class="modal-body">
        <p>do this & this to get ur access</p>
        <p>do this & this to get ur access</p>
        <p>do this & this to get ur access</p>
        <p>do this & this to get ur access</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
