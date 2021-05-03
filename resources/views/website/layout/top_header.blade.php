<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="{{ URL('shop') }}"> <span class="icon-home"></span> Home</a> 
				<a href="#"><span class="icon-user"></span> My Account</a> 
				@if(!session("email"))
					<a href="{{ URL('website/register') }}"><span class="icon-edit"></span> Free Register </a> 
				@endif
				
				@if(session("email"))
					<a href="{{ URL('website/contact-us') }}"><span class="icon-envelope"></span> Contact us</a>
				@endif
				<a href="{{ URL('website/checkout') }}"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>

				@if(session("email"))
					<a href="{{ URL('shop_logout') }}"><span class="icon-user"></span> Logout</a>
					<a>Welcome to {{ session("email") }}</a>
				@endif


			</div>
		</div>
	</div>
</div>