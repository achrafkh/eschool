@extends('layouts.app')
@section('content')
@include('partials.page',['title'=> 'Categories'])
<section id="exams-grid" class="alt-background">
    <div class="container">
        <ul class="exams-grid">
        @foreach($categories as $category)
            <li class="col-lg-3 col-md-4 col-sm-6">
                <img style="height:150px;width:300px" src="{{ $category->image }}" alt="" class="img-responsive" />
                <div class="description">
                    <h3>{{ $category->title }}</h3>
                    <ul>
                        <li><i class="fa fa-file-video-o"></i>
                        <strong>Nombre des video : </strong>
                        {{ $category->courses->count() }}</li>
                    </ul>
                    <p> {{ $category->description }} </p>
                </div>
                <a href="{{ url('courses/'.$category->id) }}"><span>Voir ce category</span></a>
            </li>
        @endforeach
        </ul>
    </div>
</section>
@endsection