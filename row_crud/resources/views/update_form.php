<form action="{{url('up')}}" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="id" value="<?php echo $qr->id ?>">
	<input type="text" name="user_name" value="<?php echo $qr->user_name ?>"/>
	<input type="text" name="user_password" value="<?php echo $qr->user_password ?>" />
	<input type="text" name="mobile" value="<?php echo $qr->mobile ?>"/>
	<input type="text" name="email" value="<?php echo $qr->email ?>"/>
	<input type="submit" name="update" value="update" />
</form>