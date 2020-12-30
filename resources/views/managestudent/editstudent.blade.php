<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{url('updatestudent')}}">
	@csrf
	
	<input type="hidden" name="id" value="{{$data->id}}">
	name
	<input type="text" name="name" value="{{$data->name}}">
	<br>
	email
	<input type="email" name="email" value="{{$data->email}}">
	<br>
	mobile
	<input type="mobile" name="mobile" value="{{$data->mobile}}">
	<br>
	category
	<input type="text" name="category" value="{{$data->category}}">
	<br>
	exam
	<input type="date" name="exam" value="{{$data->exam}}">
	<br>
	password
	<input type="password" name="password" value="{{$data->password}}">
	<br>
	<input type="submit" name="submit" value="update">
</form>
</body>
</html>