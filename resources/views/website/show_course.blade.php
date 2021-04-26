@extends("website.layout.layout")

@section("title","Course")

@section("body")
	
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{ URL('shop') }}">Home</a> <span class="divider">/</span></li>
		<li class="active">Delete Course</li>
    </ul>
	<h3 class="float-left">Are you sure to delete
	</h3>	

	<hr class="soft"/>
	<div class="well">

		<form class="form-horizontal" method="POST" action="{{ URL('course/'.$row->id) }}" >
			
			@csrf()
			@method("delete")

			<p>Name : {{ $row->name}} </p>
			<p>Duration : {{ $row->duration}} </p>

			<div class="control-group">
				<div class="controls">
				 <input type="submit" name="submitAccount" value="Remove Course" class="shopBtn exclusive">
				</div>
			</div>

		</form>

	</div>

</div>

@endsection