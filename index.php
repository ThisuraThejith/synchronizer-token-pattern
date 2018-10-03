<?php
session_start();
require_once 'token.php';

$_SESSION["logeduser"] = '';


	if(isset($_POST['username']) && isset($_POST['password']))
	
	{

 	if($_POST['username'] == "admin" && $_POST['password']=="password")
	
	{

			$_SESSION["logeduser"] = $_POST['username'];			
			$token = Token::generate_token(session_id());
			setcookie("id", session_id());
			setcookie("token", $token);
	        header('Location: control.php');
			header('Location: ./control.php');
	}
  else
  {
    echo "<script>alert('Check username and password');</script>";
    echo "<noscript>Check username and password</noscript>";
  }
}


 
?>

<html>

	<head>
		<meta charset="UTF-8">
		<title>Login Page</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/testlogin.css" rel="stylesheet">
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
	</head>

<body>
<div class="container-fluid">
<div class="second">
<div class="inside">
<form id="login" action="" method="post">
<table class="table1">
<tr>
<td><h2> Admin Login</h2></td>
</tr>
<tr>
	<td><label for="uname">User Name</label></td> 
	<td>
	  <input class="uname left" name="username" placeholder="&#xf007  User name" value="" type="text" required>
	</td>
	</tr>		
<tr>	
	<td><label for="pwd">Password </label></td>
	 <td><input class="uname" name="password" placeholder="&#xf069  Password" value="" type="password" required></td>
</tr>
<tr>	
	<td><button class="login">login</button></td>
	<td><button class="cancel" type="reset">Reset</button></td>
	
</tr>
</table>

</div>
</div>
</div>
</body>
</html>


