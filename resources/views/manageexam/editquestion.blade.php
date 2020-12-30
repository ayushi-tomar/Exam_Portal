<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{url('updatequestion')}}">
	@csrf
	
	<input type="hidden" name="id" value="{{$data->id}}">
	question
	<input type="text" name="title" value="{{$data->question}}">
	<br>
	<br>
	ans
	<input type="text" name="ans" value="{{$data->ans}}">
	<br>
	<input type="submit" name="submit" value="update">
</form>
</body>
</html>