<form action="{{route('post.form')}}" method="post">
	{{csrf_field()}}
	<input type="text" name="name">
	<a href="{{route('user', ['id'=>333, 'username' => 'hung'],false)}}">user</a>
	<a href="/user/333">user1</a>
	<button type="submit">Submit</button>
	<br>
	<a href="{{route('admin.user.profile')}}">Home</a>
	<a href="{{route('admin.category.post')}}">post id</a>

</form>