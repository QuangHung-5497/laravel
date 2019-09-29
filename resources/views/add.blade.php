@extends('master')
@section('content')
<form>
	<input type="text" name="name">
	<input type="button" name="them" value="create">


</form>
	<a href="{{route('todos.index')}}">Quay lai</a>
@endsection