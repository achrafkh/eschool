@extends('layouts.admin')
@section('content')
@include('admin.partials.cumbs',['page'=> 'Categories'])
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<h3 class="box-title">Categories</h3>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<table class="table table-striped custab">
				<thead>
				<div class="row pull-right" style="margin-bottom: 20px">
					<a href="#"  data-toggle="modal" data-target="#createCat" class="btn btn-primary btn-xs "><b>+</b> Add new categories</a>
					</div>
					<tr>
						<th>Title</th>
						<th>Description</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				@foreach($categories as $categorie)
				<tr>
					<td>{{ $categorie->title }}</td>
					<td>{{ str_limit($categorie->description,25) }}</td>
					<td class="text-center">
						<a href="#" data-id="{{ $categorie->id }}" data-title="{{ $categorie->title }}" data-description="{{ $categorie->description }}" data-toggle="modal" data-target="#editCat" class='editing btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a>
						<form onsubmit="return validate();" method="POST" action="{{ route('postcDel') }}" style="display:inline">
							{{ csrf_field() }}
							<input type="hidden" name="id" value="{{ $categorie->id }}">
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
<div class="modal fade" id="createCat" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">Create Category</h3>
			</div>
			<div class="modal-body">
				
				<!-- content goes here -->
				<form method="POST" action="{{ route('postcCreate') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="exampleInputEmail1">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Description</label>
						<input type="text" class="form-control" id="description" name="description" placeholder="Description">
					</div>
					<div class="form-group">
			            <label for="file">Upload</label>
			            <input type="file" name="file" multiple class="form-control">
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
<div class="modal fade" id="editCat" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h3 class="modal-title" id="lineModalLabel">Edit Category</h3>
			</div>
			<div class="modal-body">
				
				<!-- content goes here -->
				<form method="POST" action="{{ route('postcUpdate') }}" enctype="multipart/form-data">
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
						<input type="text" class="form-control" id="editdesc" name="description" placeholder="Description">
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
<script>
	$('.editing').click(function() {
		$('#editid').val($(this).data('id'));
		$('#edittitle').val($(this).data('title'));
		$('#editdesc').val($(this).data('description'));
});
function validate() {
return confirm('Do you really want to delete the category?');
}
</script>
@endsection