@extends('layouts.front')
@section('content')
				
					<div class="row">
@if(count($searchs)>0)
@foreach($searchs as $search)

						<div class="col-md-6 col-sm-12">
							<div class="card h-100">
								<div class="single-search search-style-1">

								<div class="blog-image"><img src="{{$search->photo ? $search->photo->path : '/images/not-available.jpg'}}" alt="Blog Image"></div>

								{{-- <a class="avatar" href="{{$search->category ? $search->category->name : ''}}">{{$search->category ? $search->category->name : ''}}</a> --}}

									<div class="blog-info">

									<h4 class="title"><a href="/post/{{$search->slug}}"><b>{{$search->title ? $search->title : ''}}</b></a></h4>

										<ul class="search-footer">
												<li><a href="/post/{{$search->slug}}"><i class="fas fa-calendar"></i>{{$post->created_at ? $post->created_at->format('d M Y') : ''}}</a></li>
							<li><a href="/category/{{$search->category_id}}"><i class="fas fa-object-group"></i>{{$post->category ? str_limit($post->category->name,10) : ''}}</a></li>
											<li><a href="/post/{{$search->slug}}"><i class="fas fa-eye"></i>138</a></li>
										</ul>

									</div><!-- blog-info -->
								</div><!-- single-search -->
							</div><!-- card -->
						</div><!-- col-md-6 col-sm-12 -->
@endforeach
@else
<h1 class="jumbotron text-danger ">Sorry! No Result Found!!!</h1>

@endif

<div class="row">
    <div class="col-sm-6 col-sm-offset-5 ">
					<div class="">{{$searchs->render()}}</div> 
      

    </div>
</div>						
                    
                    </div><!-- row -->
@stop