<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) 
  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: forbidden.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CATCH THE FISH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="bootstrap.min.css" rel="stylesheet">
	<link href="buttons.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="">
				
				<h3 style="color:white;">Welcome to Catch The Fish Challenge Experience</h3>
				<br/>	<br/>
				<a href="main.php?logout='1'" class="btn btn-danger">logout</a><br/><br/>

				<table>
					<tr>
						<th> 

							<label style="color:white;">LEVEL : EASY</label>
				<br/><br/>
				<a href="Level01/level01.php" class="btn btn-primary btn-lg btn-radius">Level 01 - Find the Correct Fish</a><br/><br/>
				<a href="Level02/level02login.php" class="btn btn-primary btn-lg btn-radius">Level 02 - META FISH</a><br/><br/>
				<a href="Level03/level03login.php" class="btn btn-primary btn-lg btn-radius">Level 03 - Capture The Fish</a><br/><br/>
				<a href="Level04/level04login.php" class="btn btn-primary btn-lg btn-radius">Level 04 - Try until the Fish Comes</a><br/><br/>
				<a href="Level05/level05login.php" class="btn btn-primary btn-lg btn-radius">Level 05 - Capture The Fish 02</a><br/>
				<br/><br/>


						</th>
						<th> 

							<label style="color:white;">LEVEL : MEDIUM</label>
				<br/><br/>
				<a href="Level06/level06login.php" class="btn btn-warning btn-lg btn-radius">Level 06 - DARK NIGHT FISHING</a><br/><br/>
				<a href="Level07/level07login.php" class="btn btn-warning btn-lg btn-radius">Level 07 - BEWARE OF BOMBS</a><br/><br/>
				<a href="Level08/level08login.php" class="btn btn-warning btn-lg btn-radius">Level 08 - CAPTURE SHARK FROM WIRE</a><br/><br/>


						</th>
						<th>
							<label style="color:white;">LEVEL : HARD</label>
				<br/><br/>
				<a href="Level09/level09login.php" class="btn btn-danger btn-lg btn-radius">Level 09 - FISH FROM EMPTY LAKE</a><br/><br/>
				<a href="Level10/level10login.php" class="btn btn-danger btn-lg btn-radius">Level 10 - CAPTURE SHARK FROM WIRE 02</a><br/><br/>



						</th>


					</tr>
					
				
				
				
			</table>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>