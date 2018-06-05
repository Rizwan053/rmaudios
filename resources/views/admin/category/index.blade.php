@extends('layouts.admin')

@section('content')


<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Categories</h4>
                                <p class="category">All Categories</p>
                            </div>
                            <div class="content table-responsive table-full-width">
@if($categories)
                                <table class="table table-striped">

                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	
                                    	<th>Created On</th>
                                    	<th>Updated On</th>
                                    </thead>
                                    <tbody>
@foreach($categories as $category)
                                        <tr>
                                        <td>{{$category->id ? $category->id : 'Not Available'}}</td>
                                        <td>{{$category->name ? $category->name : 'Not Available'}}</td>
                                        <td>{{$category->created_at ? $category->created_at->format('d M Y') : 'Not Available'}}</td>
                                        <td>{{$category->updated_at ? $category->updated_at->format('d M Y') : 'Not Available'}}</td>
                                        
                                        	
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
@endif

                            </div>
                        </div>
                    </div>




@stop