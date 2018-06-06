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
							<hr>
							

							<div class="post-image"><img src="{{$post->photo ? $post->photo->path : ''}}" alt="Blog Image"></div>
						<hr>
							<div><a href="{{$post->url ? $post->url : ''}}"><button class="form-control btn btn-lg btn-primary">Download Now</button></a></div>
							<hr>
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

									<h4 class="title"><a href="/post/{{$post->slug}}"><b>{{$post->title ? $post->title : ''}}</b></a></h4>

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
					<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://myapp-4.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            

			</div><!-- row -->

		</div><!-- container -->
	</section>
@section('scripts')
<script id="dsq-count-scr" src="//myapp-4.disqus.com/count.js" async></script>
@stop
@include('includes.front_footer')
