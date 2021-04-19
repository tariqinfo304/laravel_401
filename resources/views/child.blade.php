@extends("layout")

@section("title",$title ?? "Child")


@section("header")
	
	<p>Child Header</p>
	@parent

@endsection


@section("footer")

@endsection