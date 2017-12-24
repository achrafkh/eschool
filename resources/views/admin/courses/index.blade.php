@extends('layouts.admin')
@section('content')
@include('admin.partials.cumbs',['page'=> 'courses'])
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<h3 class="box-title">courses</h3>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if (Session::has('msg'))
			<div class="alert alert-success">
				<ul>
					<li>{{ Session::get('msg') }}</li>
				</ul>
			</div>
			@endif
			<table class="table table-striped custab">
				<thead>
				<div class="row pull-right" style="margin-bottom: 20px">
					<a href="#"  data-toggle="modal" data-target="#createCourse" class="btn btn-primary btn-xs "><b>+</b> Add new courses</a>
					</div>
					<tr>
						<th>Title</th>
						<th>Price</th>
						<th>Category</th>
						<th>Videos count</th>
						<th style="max-width:15%" class="text-center">Action</th>
					</tr>
				</thead>
				@foreach($courses as $course)
				<tr>
					<td>{{ $course->title }}</td>
					<td>{{ $course->price }}</td>
					<td>{{ $course->category->title }}</td>
					<td>{{ $course->videos->count() }}</td>
					<td class="text-center">
					<a href="/admin/courses/upload/{{ $course->id }}" class='editing btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Manage videos</a>
						<a href="#" data-cat="{{ $course->category->id }}" data-price="{{ $course->price }}" data-id="{{ $course->id }}" data-title="{{ $course->title }}" data-description="{{ $course->description }}" data-toggle="modal" data-target="#editCourse" class='editing btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a>
						<form onsubmit="return validate();" method="POST" action="{{ route('postcoDel') }}" style="display:inline">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="{{ $course->id }}">
							<button type="submit" class="btn btn-danger btn-xs">
							<span class="glyphicon glyphicon-remove"></span> Delete
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="createCourse" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">Create Category</h3>
			</div>
			<div class="modal-body">
				
				<!-- content goes here -->
				<form method="POST" action="{{ route('postcoCreate') }}"  enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="exampleInputEmail1">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description</label>
						<textarea class="summernote form-control" name="description" id="" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
			            <label for="file">Upload</label>
			            <input type="file" name="file" multiple class="form-control">
		        	</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Price</label>
						<input type="text" class="form-control" id="price" name="price" placeholder="Price">
					</div>
					<div class="form-group">
						<label for="sel1">Select list:</label>
						<select class="form-control" id="category_id" name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"> {{ $category->title }} </option>
						@endforeach
						</select>
					</div>
					
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
			<div class="modal-footer">
				<div class="btn-group btn-group-justified" role="group" aria-label="group button">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="editCourse" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">Edit Category</h3>
			</div>
			<div class="modal-body">
				
				<!-- content goes here -->
				<form method="POST" action="{{ route('postcoUpdate') }}"  enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="exampleInputEmail1">Title</label>
						<input type="text" class="form-control" id="edittitle" name="title" placeholder="Title">
					</div>
					<div class="form-group">
						<input id="editid" type="hidden" class="form-control" id="id" name="id" value="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description</label>
						<input type="text" class="summernote form-control" id="editdesc" name="description" placeholder="Description">
					</div>
					<div class="form-group">
			            <label for="file">Upload</label>
			            <input type="file" name="file" multiple class="form-control">
		        	</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Price</label>
						<input type="text" class="form-control" id="editprice" name="price" placeholder="Description">

						<div class="form-group">
						<label for="sel1">Select list:</label>
						<select class="form-control" id="editcat" name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}"> {{ $category->title }} </option>
						@endforeach
						</select>
					</div>
					</div>
					
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
			<div class="modal-footer">
				<div class="btn-group btn-group-justified" role="group" aria-label="group button">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/lang/summernote-fr-FR.min.js"></script>
<script>
$(document).ready(function() {
	$('.summernote').summernote({
	  height: 300,                 
	  minHeight: null,             
	  maxHeight: null,             
	  focus: true ,
	  lang: 'fr-FR'                 
	});
});

	$('.editing').click(function() {
		$('#editid').val($(this).data('id'));
		$('#edittitle').val($(this).data('title'));
		$('#editdesc').val($(this).data('description'));
		$('#editprice').val($(this).data('price'));
		$('#editcat').val($(this).data('cat'));

});
function validate() {
return confirm('Do you really want to delete the category?');
}
</script>
@endsection


