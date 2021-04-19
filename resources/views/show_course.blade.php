
@extends("layout")

@section("title","Course List")


@section("content")

<h2>{{ $heading }}</h2>

	@include("table",["heading" => "Show Table Data"])

<hr/>
@php

	$length = count($list);
	$i=0;

@endphp
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Course Name</th>
		</tr>
	</thead>
	<tbody>
		@while($i < $length)

			<tr>
				<td>{{ $list[$i]->id }}</td>
				<td>{{ $list[$i]->name }}</td>
			</tr>

			@php($i++)
		@endwhile
	</tbody>
</table>

<hr/>

<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Course Name</th>
		</tr>
	</thead>
	<tbody>
		@for( $i = 0; $i < $length; $i++ )

			<tr>
				<td>{{ $list[$i]->id }}</td>
				<td>{{ $list[$i]->name }}</td>
			</tr>
		@endfor
	</tbody>
</table>

<hr/>
<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Course Name</th>
		</tr>
	</thead>
	<tbody>
		@forelse($list1 as $row)

			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->name }}</td>
			</tr>

		@empty
			<tr><td colspan="2">Data Not Found</td></tr>
		@endforelse

	</tbody>
</table>	
<hr/>


<p>Couse List by injecting model in blade template</p>
<!-- $course_obj = new App\Models\Course() -->
@inject("course_obj","App\Models\Course")


<table border="1">
	<thead>
		<tr>
			<th>ID</th>
			<th>Course Name</th>
		</tr>
	</thead>
	<tbody>
		@forelse($course_obj->all() as $row)

			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->name }}</td>
			</tr>

		@empty
			<tr><td colspan="2">Data Not Found</td></tr>
		@endforelse

	</tbody>
</table>

@endsection