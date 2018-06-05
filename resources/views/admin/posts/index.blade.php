@extends('layouts.admin')

@section('content')


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
@if(session('update'))
    <div class="alert alert-info  text-white text-center" role="alert">{{session('update')}}</div>
@endif
@if(session('success'))
    <div class="alert alert-success  text-white text-center" role="alert">{{session('success')}}</div>
@endif
@if(session('delete'))
    <div class="alert alert-danger  text-white text-center" role="alert">{{session('delete')}}</div>
@endif
                            <a class="btn btn-success pull-right" href="{{route('posts.create')}}">Add New Post</a>

                                <h4 class="title">Posts</h4>
                                
                                <p class="category">All Posts</p>
                            </div>
                            <div class="content table-responsive table-full-width">
@if($posts)
                                <table class="table table-striped">

                                    <thead>
                                        <th>ID</th>
                                    	<th>Photo</th>
                                        <th>Title</th>
                                    	<th>Created On</th>                                     
                                    	<th>Edit Post</th>
                                    	<th>Delete Post</th>
                                    </thead>
                                    <tbody>
@foreach($posts as $post)
                                        <tr>
                                        <td>{{$post->id ? $post->id : 'Not Available'}}</td>
                                        <td><img width=50 height=50 class=" img-thumbnail" src="{{$post->photo ? $post->photo->path : '/images/not_available.jpg'}}" alt=""></td>
                                        <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title ? str_limit($post->title, 50) : 'Not Available'}}</a></td>
                                        <td>{{$post->created_at ? $post->created_at->format('d M Y') : 'Not Available'}}</td>
                                        <td><a class="btn btn-info" href="{{route('posts.edit',$post->id)}}">Edit</a></td>                                     
                                        <td onclick="return confirm('Are you sure you want to delete this item?');">
                                            {!!Form::open(['method'=>'DELETE','action'=>['PostController@destroy',$post->id],'files'=>true])!!}
                                            <div class='form-group'>
                                            {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                           </td>                                     
                                        
                                    </tr>
@endforeach
                                    </tbody>
                                </table>
@else 
<h1 class="jumbotron">No Post Available</h1>


@endif



                            </div>
                        </div>
                    </div>




@stop