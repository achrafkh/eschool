@extends('layouts.app')

@section('content')
@include('partials.page',['title'=> 'My Courses'])
<section id="content">
<div class="container">
<div class="row">
    <div class="col-sm-4">
        <div class="widget" data-scroll-reveal>
            <form role="form">
                <h3>Category Filter</h3>
                <ul>
                @foreach($categories as $cat)
                    <li class="checkbox">
                        <label><a href="/mycourses/{{ $cat->id }}"> {{ $cat->title }} <span class="pull-right">
                        {{ $cat->courses->count() }}
                        </span></a>
                    </li>
                @endforeach
                </ul>
            </form>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="courses">
            @foreach($courses as $course)
            <div class="course row" data-scroll-reveal>
                <div class="col-sm-4">
                    <a href="/course/{{ $course->id }}"><img src="{{ $course->image }}" alt="" class="img-responsive" /></a>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <h3><a href="/course/{{ $course->id }}"> {{ $course->title }} </a></h3>
                            <div class="meta">
                                
                                <span><i class="fa fa-file-text"></i>{{ $course->videos->count() }}</span>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 price">{{ $course->price }} TND</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p>{!! $course->description !!}<br>
                                <a href="/course/{{ $course->id }}">Check <i class="fa fa-angle-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</section>
@endsection
