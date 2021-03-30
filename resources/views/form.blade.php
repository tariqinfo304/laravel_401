<!DOCTYPE html>
<html>
<head>
	<title>Teacher Resource Controller</title>
</head>
<body>

	<h2>Teacher Resource Controller</h2>


	<a href="{{ URL('teacher') }}">Teachers List</a>

	<hr/>

	<a href="{{ URL('teacher/create') }}">Create Teacher</a>

	<hr/>

	<label>Store Teacher </label>
	<form action="{{ URL('teacher') }}" method="POST">
		@csrf()
		<input type="submit" value="New Add Teacher"/>
	</form>

	<hr/>

	<a href="{{ URL('teacher/10') }}">Get Teacher Record with ID : 10</a>

	<hr/>

	<a href="{{ URL('teacher/10/edit') }}">Edit Teacher record withg ID : 10</a>

	<hr/>


	<label>Update Teacher ( we can send only get and post request from HTML FORM ) </label>
	<form action="{{ URL('teacher/10') }}" method="POST">
		@csrf()
		@method("put")

		<input type="submit" value="New Add Teacher"/>
	</form>

	<hr/>

	<label>Delete Teacher </label>
	<form action="{{ URL('teacher/10') }}" method="POST">
		@csrf()
		@method("delete")
		
		<input type="submit" value="New Add Teacher"/>
	</form>


</body>
</html>