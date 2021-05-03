<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="index.php">Home	</a></li>
			  <li class=""><a href="list-view.php">List View</a></li>
			  <li class=""><a href="grid-view.php">Grid View</a></li>
			  <li class=""><a href="three-col.php">Three Column</a></li>
			  <li class=""><a href="four-col.php">Four Column</a></li>
			  <!-- <li class=""><a href="general.php">General Content</a></li> -->

			  	@if(session("email"))
			  		<li class=""><a href="{{ URL('course')}}">Course</a></li>
				@endif
			</ul>

			@if(!session("email"))
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form id="login_form" class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		  @endif
		</div>
	  </div>
</div>
<script type="text/javascript">
	

	$("#login_form").submit(function(e){

		e.preventDefault();

		let email = $("#inputEmail").val();
		let password = $("#inputPassword").val();

		$.ajax({
			  method: "GET",
			  url: "{{ URL('shop_login')}}",
			  data:{email : email,password:password} 
			})
		  .done(function( msg ) {
		    	
		    
		    if(msg.msg == "invalid user")
		  	{
		  		alert("Error on login");
		  	}
		  	else
		  	{
		  		//alert("Login Successfully");
		  		location.href= "{{ URL('shop') }}"
		  	}
		    //alert( "Data Saved: " + msg );

		  }).error(function(msg){
		  	
		  	/*	
		  	msg = msg.responseText;

		  	msg = JSON.parse(msg);

		  	//console.log(msg);
		  
		  	if(msg.errors)
		  	{
		  		//console.log(msg.errors);
		  		// if(msg.errors.password)
		  		// {
		  		// 	alert("Password is invalid");
		  		// }
		  		// else
		  		// {
		  		// 	alert("USername is invalid");
		  		// }
		  	}*/
		  	alert("Error on login");
		  
		  });
	});
</script>