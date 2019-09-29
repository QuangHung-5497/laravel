@extends('master')
@section('content')
<h1>Edit</h1>
<form>
	<input type="text" name="name">
	<input type="button" name="them" value="update">


</form>
	<a href="{{route('todos.index')}}">Quay lai</a>
@endsection