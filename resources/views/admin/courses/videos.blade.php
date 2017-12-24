@extends('layouts.admin')
@section('content')
@include('admin.partials.cumbs',['page'=> 'Uploads'])
<style>
    .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}
img.limit-size { max-width: 250px;height: 150px;}
</style>
<div class="well">
    <div class="row" style="padding: 20px 20px 20px 20px">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <button class="btn btn-success" data-toggle="collapse" data-target="#addVideo">Add Video</button>
    </div>
    <div id="addVideo" class="collapse">
        <form  action="/admin/courses/upload/{{$id}}" method="POST" id="upload" enctype="multipart/form-data" >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Video title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" class="form-control" id="desc">
            </div>
            <div class="form-group">
                <label for="desc">Picture</label>
                <input type="file" name="picture" class="form-control">
            </div>
            <div class="form-group">
                <label for="file">Upload</label>
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" >Start Upload</button>
            </div>
        </form>
    </div>
    
</div>
<div class="well well-sm">
    <strong>Category Title</strong>
    <div class="btn-group">
        <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
        </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
    class="glyphicon glyphicon-th"></span>Grid</a>
</div>
</div>
<div id="products" class="row list-group">
@foreach($videos as $video)
<div class="item  col-xs-4 col-lg-4">
    <div class="thumbnail">
        <img class="group list-group-image limit-size" src="{{ $video->picture }}" alt="" />
        <div class="caption" style="height: 150px;">
            <h4 class="group inner list-group-item-heading">
            {{ $video->title }}</h4>
            <p class="group inner list-group-item-text">
                {{ str_limit($video->description,200) }}
            </p>
           
        </div>
         <a href="/admin/videos/edit/{{ $video->id }}" class="btn btn-primary" style="margin-bottom : 10px;margin-left : 10px;">Edit</a>
    </div>
</div>

@endforeach
</div>
@endsection

@section('js')
<script>
$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>

@endsection