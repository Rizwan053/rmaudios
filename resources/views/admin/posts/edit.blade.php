@extends('layouts.admin')

@section('content')


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <h4 class="title">Edit Post</h4>
                                <p class="category">Fill the Required Field:</p>
                            </div>
                            <div class="content table-responsive">
{!!Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id],'files'=>true])!!}



<div class='form-group'>
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title',null,['class'=>'form-control']) !!}
</div>
<div class='form-group'>
{!! Form::label('url', 'URL:') !!}
{!! Form::text('url',null,['class'=>'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::label('category_id', 'Category:') !!}
{!! Form::select('category_id',[''=>'Choose Category']+$categories,null,['class'=>'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::label('photo_id', 'Upload File:') !!}
{!! Form::file('photo_id',['class'=>'']) !!}
</div>


<div class='form-group'>
{!! Form::label('body', 'Description:') !!}
{!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::submit('Update Post',['class'=>'form-control btn btn-success']) !!}
</div>



{!! Form::close() !!}


                            </div>
                        </div>
                    </div>




@stop