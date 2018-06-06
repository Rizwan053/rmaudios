<!DOCTYPE HTML>
<html lang="en">
<head>

		<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon.png">

	<title>RM Audios</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


	<link href="/css/bootstrap.css" rel="stylesheet">

	<link href="/css/ionicons.css" rel="stylesheet">


	<link href="/css/styles.css" rel="stylesheet">

	<link href="/css/responsive.css" rel="stylesheet">


	<link href="/css/styles2.css" rel="stylesheet">

	<link href="/css/responsive2.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="/" class="logo "><strong>RM Audio's</strong></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="fas fa-bars"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/">Home</a></li>
				


				
			</ul><!-- main-menu -->
		

			<div class="src-area">
					{!!Form::open(['method'=>'POST','action'=>'SearchController@store']) !!}
					
					{{-- {!! Form::label('title', '') !!} --}}
					
					{{ Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'src-btn'] )  }}
					{!! Form::text('title',null,['class'=>'src-input', 'placeholder'=>'Type Of Search']) !!}
					
					{!! Form::close() !!}
					{{-- <button class="src-btn" type="submit"><i class="fas fa-search"></i></button>
					<input class="src-input" type="text" placeholder="Type of search"> --}}
				
			</div>
		

		</div><!-- conatiner -->
	</header>