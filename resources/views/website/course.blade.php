@extends("website.layout.layout")

@section("title","Course")

@section("body")
	
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="{{ URL('shop') }}">Home</a> <span class="divider">/</span></li>
		<li class="active">Course Listing</li>
    </ul>
	<h3 class="float-left"> Course Listing

		<a class="exclusive shopBtn" style="float: right;" href="{{ URL('course/create') }}">Add Course</a>
	</h3>	

	<hr class="soft"/>
	<div class="well">
		<table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Course Name</th>
              <th>Course Duration</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($list as $row )
	            <tr>
	              <td>{{ $row->id }}</td>
	              <td>{{ $row->name }}</td>
	              <td>{{ $row->duration }}</td>
	              <td>{{ $row->created_at}}</td>
	              <td style="cursor: pointer;">
	              	<a href="{{ URL('course/'.$row->id.'/edit') }}">
	              	<span class="icon-edit"></span>
	              </a>
	              &nbsp;&nbsp;&nbsp;

	              <a href="{{ URL('course/'.$row->id) }}">
	              	
	              	<span class="icon-remove"></span>
	              </a>
	              </td>
	            </tr>
            @endforeach
          </tbody>
        </table>

	</div>

</div>

@endsection