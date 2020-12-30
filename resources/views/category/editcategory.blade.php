<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{url('update')}}">
	@csrf
	
	<input type="hidden" name="id" value="{{$data->id}}">
	name
	<input type="text" name="name" value="{{$data->name}}">
	<br>
	<input type="submit" name="submit" value="update">
</form>
</body>
</html>