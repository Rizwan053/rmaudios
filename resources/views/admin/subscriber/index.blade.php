@extends('layouts.admin')

@section('content')


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

@if(session('delete'))
    <div class="alert alert-danger text-white text-center" role="alert">{{session('delete')}}</div>
@endif

                                <h4 class="title">Subscribers</h4>
                                
                                <p class="category">All Subscribers of this Application</p>
                            </div>
                            <div class="content table-responsive table-full-width">
@if($subscribers)
                                <table class="table table-striped">

                                    <thead>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Date of Subscription</th>
                                        <th>Delete</th>
                                    	
                                    </thead>
                                    <tbody>
@foreach($subscribers as $subscriber)
                                        <tr>
                                        <td>{{$subscriber->id ? $subscriber->id : 'Not Available'}}</td>
                                        <td>{{$subscriber->email ? $subscriber->email : 'Not Available'}}</td>
                                        
                                        <td>{{$subscriber->created_at ? $subscriber->created_at->format('d M Y') : 'Not Available'}}</td>

                                        <td onclick="return confirm('Are you sure you want to delete this item?');">
                                            {!!Form::open(['method'=>'DELETE','action'=>['SubscriberController@destroy',$subscriber->id],'files'=>true])!!}
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
<h1 class="jumbotron">No subscriber Available</h1>


@endif
<div class="row">
    <div class="col-sm-6 col-sm-offset-5">
        {{$subscribers->render()}}

    </div>
</div>



                            </div>
                        </div>
                    </div>




@stop