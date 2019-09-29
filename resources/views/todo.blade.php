@extends('master')
@section('content')
<div class="container">
    <a href="{{route('todos.create')}}" class="btn btn-success">Add</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            	{{-- @php
            		if (1>0) {
            			echo "hello";
            		}
            	@endphp --}}
				@if(count($list)==0)
				<h1>k co du lieu</h1>
				@else
				<tr>
	                <th>#</th>
	                <th>Todo</th>
	                <th>Created at</th>
	                <th>Updated at</th>
	                <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>
		        	@foreach($list as $key => $item)
		        	<tr>
		                <td>{{$key + 1}}</td>
		                <td>{{$item}}</td>
		                <td>23/8/2019</td>
		                <td>23/8/2019</td>
		                <td>
		                    <a style="display: inline-block; width: 67px;" href="todos/{{$key + 1}}/edit" class="btn btn-warning">Edit</a>
		                    <form style="display: inline-block;" action="#" method="post" accept-charset="utf-8">
		                        @csrf
		                        {{method_field('delete')}}
		                        <button type="submit" class="btn btn-danger">Delete</button>
		                    </form>
		                </td>
		            </tr>
		        	@endforeach
		            
		            
				</tbody>
            @endif
        </table>
    </div>
</div>
@endsection