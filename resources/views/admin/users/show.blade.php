@extends('layouts.admin')
@section('content')
@include('admin.partials.cumbs',['page'=> 'Categories'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.min.css">

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <div class="panel panel-default">
                <div class="panel-heading">User {{ $user->name }}</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                    <a data-toggle="modal" data-target="#myModal" href="#" title="Edit Users Courses"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Manage Courses</button></a>

                    <form method="POST" action="{{ url('admin/users' . '/' . $user->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $user->id }}</td>
                                </tr>
                                <tr><th> Name </th><td> {{ $user->name }} </td></tr><tr><th> Email </th><td> {{ $user->email }} </td></tr><tr><th> Temp Id </th><td> {{ $user->temp_id }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           

    </div>
</div>
<div class="row">
    @foreach($user->courses as $course)
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="user" src="{{ $course->image }}">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)">
                        <h4 class="text-white">{{ $course->title }}</h4>
                    <h5 class="text-white">{{ $course->price }} TND</h5> </div>
                </div>
            </div>
            <div class="user-btm-box">
                <p><strong>Videos : </strong> {{ $course->videos->count() }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>




<!-- line modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Manage Courses</h3>
            </div>
            <div class="modal-body">
                
                <!-- content goes here -->
                <form method="POST" action="/admin/user/{{$user->id}}/courses">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputPassword1">Add courses</label>
                        <select name="courses[]"  class="chosen-select" multiple>
                            <option value=""></option>
                            @foreach($categories as $categorie)
                            <optgroup label="{{ $categorie->title }}">
                                @foreach($categorie->courses as $course)
                                 <option @if($user->hasCourse( $course->id )) selected  @endif value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                            </optgroup>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                    </div>
                    <div class="btn-group btn-delete hidden" role="group">
                        <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.jquery.min.js"></script>
<script>
    $(function(){
        $(".chosen-select").chosen({width: '100%'});
    })
</script>
@endsection



