<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	{{session('type')}}
	<h1>Welcome Home! {{session('username')}} </h1>
	<a href="{{route('home.add')}}">Create</a> |
	<a href="{{route('home.stdlist')}}">Student List</a> |
	<a href="/logout">Logout</a>	

</body>
</html>