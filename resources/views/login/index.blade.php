<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login page</h1>
	
	<form method="post">
	<!--	{{csrf_field()}}-->
	<!--<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		@csrf
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach

	<div>
		{{session('msg')}}
	</div>
</body>
</html>