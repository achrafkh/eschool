@extends('layouts.master')
@section('content')
@include('partials.slider')
{{--
<section id="welcome">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-3">
                <p><img src="images/feature1.gif" alt="" /></p>
                <h3>Art</h3>
                <p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
                <p><a href="index.html#" target="_blank" class="btn btn-primary">Read More</a></p>
            </div>
            <div class="col-sm-3">
                <p><img src="images/feature2.gif" alt="" /></p>
                <h3>Geometry</h3>
                <p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
                <p><a href="index.html#" target="_blank" class="btn btn-primary">Read More</a></p>
            </div>
            <div class="col-sm-3">
                <p><img src="images/feature3.gif" alt="" /></p>
                <h3>Science</h3>
                <p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
                <p><a href="index.html#" target="_blank" class="btn btn-primary">Read More</a></p>
            </div>
            <div class="col-sm-3">
                <p><img src="images/feature4.gif" alt="" /></p>
                <h3>Geography</h3>
                <p>Non ipsum vulputate condimentum eu id tellus. Praesent commodo arcu quis rhoncus porttitor. Suspendisse volutpat, quam eu rutrum laoreet, ex sapien pellentesque.</p>
                <p><a href="index.html#" target="_blank" class="btn btn-primary">Read More</a></p>
            </div>
        </div>
    </div>
</section>

--}}
<section id="featured-posts" class="alt-background">
    <div class="container">
        <h2 class="text-center carousel-title">
        Courses
        <a href="index.html#">View All</a>
        </h2>
        <div class="owl-carousel">
           @foreach($all as $item)
             <div class="item">
                <a href="/course/{{ $item->id }}"><img src="{{ $item->image }}" alt="" class="img-responsive" /></a>
                <h3><a href="/course/{{ $item->id }}">{{ $item->title }}</a></h3>
                <div class="meta">
                    <p><a href="/course/{{$item->id}}"><strong>Category</strong> : {{$item->category->title}}</a></p>

                <p><a href="/course/{{$item->id}}"><strong>Videos</strong> : {{$item->videos->count()}}</a></p>
                </div>
                <div class="price">{{ $item->price }} TND</div>
            </div>
           @endforeach

        </div>
    </div>
</section>
<section id="search">
    <div class="tint"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" data-scroll-reveal>
                <h2 class="carousel-title">
                Search for Courses
                <a href="courses-list-right-sidebar.html">View All Courses</a>
                </h2>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="input-keywords">Keywords</label>
                        <input type="text" class="form-control input-lg" id="input-keywords" placeholder="Keywords">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Search</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="popular-courses">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="carousel-title">
                Recent Courses
                <a href="/home">View All Courses</a>
                </h2>
            </div>
        </div>
        <div class="row">
            @foreach($recent as $course)
                <div class="col-sm-4">
                <p><a href="/course/{{$course->id}}"><img src="{{$course->image}}" alt="" class="img-responsive" /></a></p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="about-reviews">
    <div class="tint"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" data-scroll-reveal>
                <h2>What Our Students Say</h2>
                <div class="owl-carousel">
                    <div class="item">
                    <blockquote>Donec varius ante in turpis faucibus sagittis. Vestibulum lacinia ante eget fringilla lobortis. Nunc sollicitudin, arcu at fringilla varius, turpis dui venenatis augue, at adipiscing ante ipsum vel leo. In a sem sit amet mi condimentum semper. Nulla eleifend convallis gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit erat eu suscipit porttitor. Sed vestibulum mauris sit amet eros feugiat egestas. Ut rhoncus imperdiet est eget ullamcorper. Fusce at orci sed augue aliquam malesuada. <small>Sally Peterson, Student</small></blockquote>
                </div>
                <div class="item">
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper consectetur nunc ac pretium. Nullam vel lectus non augue imperdiet porta. Proin commodo malesuada faucibus. Integer at lacinia lacus. Vestibulum dignissim imperdiet est vel ornare. Sed vehicula luctus massa, sit amet porta purus feugiat a. Cras tincidunt neque vitae enim pellentesque, nec congue mauris suscipit. Praesent sit amet odio lacus. <small>Malcolm Carr, Student</small></blockquote>
            </div>
            <div class="item">
            <blockquote>Integer faucibus orci eu lorem vulputate, non semper odio consectetur. Phasellus eu commodo lectus, interdum molestie nunc. Maecenas aliquet sagittis elementum. Nulla lobortis diam nisl, id consectetur nunc faucibus viverra. Donec vel porta augue, eget accumsan lorem. Sed dictum consequat ipsum eget porta. Donec imperdiet dolor at ante interdum, sed viverra orci iaculis. Donec vestibulum nulla at tortor molestie, vel convallis neque vestibulum. Phasellus luctus purus ut tincidunt imperdiet. <small>Antonia Owen, Student</small></blockquote>
        </div>
        <div class="item">
        <blockquote>Vestibulum viverra dolor lorem, vitae ornare velit facilisis eget. Phasellus ornare, mauris id interdum cursus, velit libero dictum dolor, a vehicula lacus enim id tortor. Vestibulum faucibus nec elit id iaculis. Aenean lorem ante, pretium ac iaculis non, tincidunt in quam. Nunc lobortis dictum dui. Pellentesque sagittis luctus posuere. Sed suscipit mi vitae orci accumsan, ut imperdiet odio molestie. <small>Jared Murray, Student</small></blockquote>
    </div>
</div>
</div>
</div>
</div>
</section>
@endsection