<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<title>Watch Shop- @yield('title')</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="shortcut icon" href="{{ Asset('ico/favicon.ico') }} ">
    
    	@include("website.layout.css")

  	</head>
	<body>

		<!-- Top Header -->

		@section("top_header")
			
			@include("website.layout.top_header")
		
		@show

		<div class="container">

			<div id="gototop"> </div>
			<!-- Header section -->
			@section("header")
				
				@include("website.layout.header")

			@show

			<!-- Navbar section -->

			@section("navbar")

				@include("website.layout.navbar")

			@show

			
			<div class="row">
				@section("sidebar")
					
					@include("website.layout.sidebar")
				
				@show
				
				@yield("body")

			</div>	

			@section("manufacture")

				@include("website.layout.manufactures")

			@show

			@section("footer")

				@include("website.layout.footer")

			@show

		</div>
		<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>

		@include("website.layout.js")

 	</body>
</html>






