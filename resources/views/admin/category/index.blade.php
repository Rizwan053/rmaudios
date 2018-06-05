@extends('layouts.admin')

@section('content')


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                @if(session('success'))
                            <div class="alert alert-success text-center">{{session('success')}}</div>
                                @endif
                                @if(session('update'))
                            <div class="alert alert-info text-center">{{session('update')}}</div>
                                @endif
                                @if(session('delete'))
                            <div class="alert alert-info text-center">{{session('delete')}}</div>
                                @endif
                                
 <h4 class="title">Add New Category</h4>
                                <hr>
 

 {!!Form::open(['method'=>'POST','action'=>'CategoryController@store','class'=>'form-inline']) !!}
 <div class='form-group'>
 {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name',null,['placeholder'=>'Type Here','class'=>' form-control mr-sm-2']) !!}
 </div>
 <div class='form-group'>
 {!! Form::submit('Add Category',['class'=>' btn btn-success my-2 my-sm-0']) !!}
 </div>
 {!! Form::close() !!}
 <hr>


                                <h4 class="title">Categories</h4>
                                <p class="category">All Categories</p>
                                <hr>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
@if($categories)
                                <table id="tab" class="table table-striped">

                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	
                                    	<th>Created On</th>
                                    	<th>Edit</th>
                                    	<th>Delete</th>
                                    </thead>
                                    <tbody>
@foreach($categories as $category)
                                        <tr>
                                        <td>{{$category->id ? $category->id : 'Not Available'}}</td>

                                        <td>{{$category->name ? $category->name : 'Not Available'}}</td>
                                        <td>{{$category->created_at ? $category->created_at->format('d M Y') : 'Not Available'}}</td>
<td>
{!!Form::model($category,['method'=>'PATCH','action'=>['CategoryController@update',$category->id],'class'=>'form-inline']) !!}
<div class='form-group'>
{!! Form::label('', '') !!}
{!! Form::text('name',null,['placeholder'=>'Type Here','class'=>' form-control mr-sm-2']) !!}
</div>
<div class='form-group'>
{!! Form::submit('Change',['class'=>' btn btn-info my-2 my-sm-0']) !!}
</div>
{!! Form::close() !!}

</td>

<td onclick="return confirm('Are you sure you want to delete this item?');">
{!!Form::open(['method'=>'DELETE','action'=>['CategoryController@destroy',$category->id],'class'=>'form-inline']) !!}

<div class='form-group'>
{!! Form::submit('Delete',['class'=>' btn btn-danger my-2 my-sm-0']) !!}
</div>
{!! Form::close() !!}

</td>
                                        	
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
@endif

                            </div>
                        </div>
                    </div>




@stop

