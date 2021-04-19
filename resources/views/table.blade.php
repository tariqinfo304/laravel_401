<table border="1">
	<legend>{{ $heading }}</legend>
	<thead>
		<tr>
			<th>ID</th>
			<th>Course Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach($list as $row)

			@if($row->id == 1 )
				<tr>
					<td>{{ $row->id }}</td>
					<td>{{ $row->name }}</td>
				</tr>
			@endif

		@endforeach
	</tbody>
</table>