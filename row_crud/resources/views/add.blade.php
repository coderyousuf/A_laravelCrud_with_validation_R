<form action="{{url('save')}}" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="text" name="user_name" />
	<input type="text" name="user_password" />
	<input type="text" name="mobile" />
	<input type="text" name="email" />
	<input type="submit" name="save" value="save">
</form>