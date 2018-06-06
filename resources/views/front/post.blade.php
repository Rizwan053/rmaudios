@include('includes.front_header')


	{{-- <div class="slider">
		<div class="display-table  center-text">
			<h1 class="title display-table-cell"><b>DESIGN</b></h1>
		</div>
	</div><!-- slider --> --}}

	<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">
@if($post)
					<div class="main-post">
						<div class="blog-post-inner">

							<div class="post-info">

							

							

							</div><!-- post-info -->

							<h3 class="title"><b>{{$post->title ? $post->title : ''}}</b></h3>
							{{-- <h6 class="date">{{$post->created_at ? $post->created_at->format('d M Y') : ''}}</h6><hr> --}}
							

							<div class="post-image"><img src="{{$post->photo ? $post->photo->path : ''}}" alt="Blog Image"></div>

							<p class="para">{{$post->body ? $post->body : '' }}</p>

							<ul class="tags">
								<li><a href="#">{{$post->category ? $post->category->name : ''}}</a></li>
								
						</div><!-- blog-post-inner -->

						<div class="post-icons-area">
							<ul class="post-icons">
							<li><a href="#"><i class="fas fa-calendar"></i>{{$post->created_at ? $post->created_at->format('d M Y') : ''}}</a></li>
							<li><a href="/category/{{$post->category_id}}"><i class="fas fa-object-group"></i>{{$post->category ? str_limit($post->category->name,10) : ''}}</a></li>
								<li><a href="#"><i class="fas fa-eye"></i>138</a></li>
							</ul>

							<ul class="icons">
								<li>SHARE : </li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
							</ul>
						</div>

					
					</div><!-- main-post -->
@endif
	
				</div><!-- col-lg-8 col-md-12 -->

				<div class="col-lg-4 col-md-12 no-left-padding">

					@include('includes.front_sidebar')

				</div><!-- col-lg-4 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- post-area -->

@if($posts)

	<section class="recomended-area section">
		
		<div class="container">
				<h3 class="">You a May Also Like this </h3><hr>
			
			
			<div class="row">
@foreach($posts as $post)
			<div class="col-md-4 col-sm-12">
							<div class="card h-100">
								<div class="single-post post-style-1">

								<div class="blog-image"><img src="{{$post->photo ? $post->photo->path : '/images/not-available.jpg'}}" alt="Blog Image"></div>

								{{-- <a class="avatar" href="{{$post->category ? $post->category->name : ''}}">{{$post->category ? $post->category->name : ''}}</a> --}}

									<div class="blog-info">

									<h4 class="title"><a href="/post/{{$post->id}}"><b>{{$post->title ? $post->title : ''}}</b></a></h4>

										<ul class="post-footer">
											<li><a href="#"><i class="fas fa-heart"></i>57</a></li>
											<li><a href="#"><i class="fas fa-comments"></i>6</a></li>
											<li><a href="#"><i class="fas fa-eye"></i>138</a></li>
										</ul>

									</div><!-- blog-info -->
								</div><!-- single-post -->
							</div><!-- card -->
						</div><!-- col-md-6 col-sm-12 -->
@endforeach
						</div><!-- row -->

		</div><!-- container -->
	</section>
	@endif

	<section class="comment-section">
		<div class="container">
			<h4><b>POST COMMENT</b></h4>
			<div class="row">

				<div class="col-lg-8 col-md-12">
					<div class="comment-form">
						<form method="post">
							<div class="row">

								<div class="col-sm-6">
									<input type="text" aria-required="true" name="contact-form-name" class="form-control"
										placeholder="Enter your name" aria-invalid="true" required >
								</div><!-- col-sm-6 -->
								<div class="col-sm-6">
									<input type="email" aria-required="true" name="contact-form-email" class="form-control"
										placeholder="Enter your email" aria-invalid="true" required>
								</div><!-- col-sm-6 -->

								<div class="col-sm-12">
									<textarea name="contact-form-message" rows="2" class="text-area-messge form-control"
										placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
								</div><!-- col-sm-12 -->
								<div class="col-sm-12">
									<button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
								</div><!-- col-sm-12 -->

							</div><!-- row -->
						</form>
					</div><!-- comment-form -->

					<h4><b>COMMENTS(12)</b></h4>

					<div class="commnets-area">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

						<div class="comment">
							<h5 class="reply-for">Reply for <a href="#"><b>Katy Lui</b></a></h5>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div><!-- commnets-area -->

					<div class="commnets-area ">

						<div class="comment">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/avatar-1-120x120.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b>Katy Liu</b></a>
									<h6 class="date">on Sep 29, 2017 at 9:48 am</h6>
								</div>

								<div class="right-area">
									<h5 class="reply-btn" ><a href="#"><b>REPLY</b></a></h5>
								</div>

							</div><!-- post-info -->

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>

						</div>

					</div><!-- commnets-area -->

					<a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</a>

				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>

@include('includes.front_footer')
