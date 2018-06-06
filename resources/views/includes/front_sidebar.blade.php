<div class="single-post info-area ">

						

						<div class="subscribe-area">
@if(session('success'))
<p class="alert alert-success text-center">{{session('success')}}</p>
@endif
@if(count($errors)>0)
<div class="alert alert-danger text-center">
<ul>
    @foreach($errors->all() as $error)
<li>{{strtoupper($error)}}</li>
    @endforeach
</ul>
</div>
@endif

							<h4 class="title"><b>SUBSCRIBE NOW</b></h4>
							

							<div class="input-area">


								{!!Form::open(['method'=>'POST','action'=>'SubscriberController@store']) !!}

								{!! Form::text('email',null,['class'=>'email-input', 'placeholder'=>'Enter you Email']) !!}
								{{ Form::button('<i class="fa fa-check-circle"></i>', ['type' => 'submit', 'class' => 'submit-btn'] )  }}

								{!! Form::close() !!}
							</div>
							<br>
						<h6 class="title"><b>Total Subscriber:</b> {{count($subscribers)}}</h6>
							

						</div><!-- subscribe-area -->

						{{-- <div class="tag-area">

							<h4 class="title"><b>TAG CLOUD</b></h4>
							<ul>
								<li><a href="#">Manual</a></li>
								<li><a href="#">Liberty</a></li>
								<li><a href="#">Recomendation</a></li>
								<li><a href="#">Interpritation</a></li>
								<li><a href="#">Manual</a></li>
								<li><a href="#">Liberty</a></li>
								<li><a href="#">Recomendation</a></li>
								<li><a href="#">Interpritation</a></li>
							</ul>

						</div> --}}

						<div class="tag-area" >
							<h4 class="title"><b>Categories</b></h4>

				@if($categories)
							<ul>
				@foreach($categories as $cat)
							<li><a href="/category/{{$cat->id}}">{{$cat->name ? $cat->name : '' }}</a></li>

				@endforeach
							</ul>

				@endif

							

						</div>
{{-- 
						<div class="about-area">
							<h4 class="title"><b>ABOUT BONA</b></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>
						</div> --}}

					</div><!-- info-area -->