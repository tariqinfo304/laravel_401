@extends("website.layout.layout")

@section("title","Add Course")

@section("body")
	
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{ URL('shop') }}">Home</a> <span class="divider">/</span></li>
		<li class="active">Add Course</li>
    </ul>
	<div class="well">
		<form class="form-horizontal" method="POST" 


			@if(!empty($row))

				action="{{ URL('course/'.$row->id) }}" 

			@else
				action="{{ URL('course') }}" 

			@endif
			

			>

			@if(!empty($row))

				@method("put")

			@endif
			
			@csrf()

			@if(!empty($row))

				<h3>Edit Course</h3>

			@else

				<h3>Add Course</h3>

			@endif

<!-- 
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif -->

			<div class="control-group">
				<label class="control-label">Name<sup style="color:red">*</sup></label>
				<div class="controls">
				  <input type="text" required="" name="name" placeholder="Name"

				  @if(!empty($row))

				  	value = "{{$row->name}}"


				  @else
				  	value="{{ old('name') }}"
				  @endif

				  >

				  @error('name')
					    <div class="alert alert-danger">{{ $message }}</div>
				@enderror

				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Duration<sup style="color:red">*</sup></label>
				<div class="controls">
				  <input type="text" name="duration" required=""

				  @if(!empty($row))

				  	value = "{{$row->duration}}"

				  @else
				  	value="{{ old('duration') }}"
				  	
				  @endif
				   placeholder="Duration">


				@error('duration')
					    <div class="alert alert-danger">{{ $message }}</div>
				@enderror

				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				 <input type="submit" name="submitAccount" 

				 @if(!empty($row))

				 value="Edit Course"

				 @else
				 value="Add Course"
				 @endif

				  class="shopBtn exclusive">
				</div>
			</div>
		</form>
	</div>

</div>

@endsection