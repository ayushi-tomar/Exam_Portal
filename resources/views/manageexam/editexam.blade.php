<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="{{url('updateexam')}}">
	@csrf
	
	<input type="hidden" name="id" value="{{$data->id}}">
	title
	<input type="text" name="title" value="{{$data->title}}">
	<br>
	category
	<input type="text" name="category" value="{{$data->category}}">
	<br>
	examdate
	<input type="date" name="examdate" value="{{$data->examdate}}">
	<br>

	<input type="submit" name="submit" value="update">
</form>
</body>
</html>