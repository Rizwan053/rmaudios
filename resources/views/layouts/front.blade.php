@include('includes.front_header')


	{{-- <div class="slider display-table center-text">
		<h1 class="title display-table-cell"><b>BEAUTY</b></h1>
	</div><!-- slider --> --}}

	<section class="blog-area section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">

			

@yield('content')


      

				</div><!-- col-lg-8 col-md-12 -->

				<div class="col-lg-4 col-md-12 ">

@include('includes.front_sidebar')

				</div><!-- col-lg-4 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- section -->


	
@include('includes.front_footer')
