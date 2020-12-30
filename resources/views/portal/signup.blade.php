<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet"  href="css/bootstrap.css">

</head>
<body>
	<form method="post" action="{{url('saveportal')}}" style="max-width:500px;margin:auto">
    @csrf
 <center> <h1>Signup</h1></center>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="name" name="name">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-phone icon" ></i>
    <input class="input-field" type="text" placeholder="Mobile" name="mobile">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn">Register</button>
    <br>
  <br>
  <a href="{{'/login'}}"  class=" btn-outline-danger"> login </a>
</form>

</body>
</html>