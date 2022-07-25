<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="add">Add+</a>
	<table border="1" width="100%">
		<thead>
			<tr>
				<th>SL</th>
				<th>user name</th>
				<th>user password</th>
				<th>mobile</th>
				<th>email</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			@php
				$sl=1;
				foreach($qr as $row){
			@endphp
			<tr>
				<td>@php echo $sl++; @endphp</td>
				<td>@php echo $row->user_name; @endphp</td>
				<td>@php echo $row->user_password; @endphp</td>
				<td>@php echo $row->mobile; @endphp</td>
				<td>@php echo $row->email; @endphp</td>
				<td>
					<a href="delete/@php echo $row->id @endphp">Delete</a>
					<a href="up_form/<?php echo $row->id ?>">Update</a>
				</td>
			</tr>
			@php } @endphp
		</tbody>
	</table>
</body>
</html>