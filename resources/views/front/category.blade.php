@extends('layouts.front')
@section('content')
				
					<div class="row">
@if(count($posts)>0)
@foreach($posts as $post)

						<div class="col-md-6 col-sm-12">
							<div class="card h-100">
								<div class="single-post post-style-1">

								<div class="blog-image"><img src="{{$post->photo ? $post->photo->path : '/images/not-available.jpg'}}" alt="Blog Image"></div></a>

								{{-- <a class="avatar" href="{{$post->category ? $post->category->name : ''}}">{{$post->category ? $post->category->name : ''}}</a> --}}

									<div class="blog-info">

									<h4 class="title"><a href="/post/{{$post->slug}}"><b>{{$post->title ? $post->title : ''}}</b></a></h4>

										<ul class="post-footer">
												<li><a href="/post/{{$post->slug}}"><i class="fas fa-calendar"></i>{{$post->created_at ? $post->created_at->format('d M Y') : ''}}</a></li>
                                                <li><a href="/category/{{$post->category_id}}"><i class="fas fa-object-group"></i>{{$post->category ? str_limit($post->category->name,10) : ''}}</a></li>
                                                <li><a href="/post/{{$post->slug}}"><i class="fas fa-eye"></i>138</a></li>
										</ul>

									</div><!-- blog-info -->
								</div><!-- single-post -->
							</div><!-- card -->
						</div><!-- col-md-6 col-sm-12 -->
@endforeach
@else
<h1 class="jumbotron text-danger ">Sorry! No Post found in this Category!!!</h1>

@endif

<div class="row">
    <div class="col-sm-6 col-sm-offset-5 ">
					<div class="">{{$posts->render()}}</div> 
      

    </div>
</div>						
                    
                    </div><!-- row -->
@stop