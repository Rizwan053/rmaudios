<div class="single-post info-area ">

						

						<div class="subscribe-area">

							<h4 class="title"><b>SUBSCRIBE</b></h4>
							<div class="input-area">
								<form>
									<input class="email-input" type="text" placeholder="Enter your email">
									<button class="submit-btn" type="submit"><i class="fas fa-envelope-square"></i></button>
								</form>
							</div>

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