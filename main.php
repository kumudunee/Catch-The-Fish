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
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>	
<body>
	
	<nav class="navbar navbar-dark bg-primary">
  		<!-- Navbar content -->
  		<h6 style="color:white;">CATCH THE FISH</h6>

  		<a href="main.php?logout='1'" class="btn btn-danger">logout</a><br/><br/>
	</nav>

	<hr/>
	Earned Points: 0
	<hr/>
<table class="table table-borderless">
	<tbody>
<tr>
	
	<td>
		<h6>Level : Easy</h6><br/>
				<a href="Level01/level01.php" class="btn btn-primary btn-lg btn-radius btn-sm">Level 01 - Find the Correct Fish</a><br/><br/>
				<a href="Level02/level02login.php" class="btn btn-primary btn-lg btn-radius btn-sm">Level 02 - META FISH</a><br/><br/>
				<a href="Level03/level03login.php" class="btn btn-primary btn-lg btn-radius btn-sm">Level 03 - Capture The Fish</a><br/><br/>
				<a href="Level04/level04login.php" class="btn btn-primary btn-lg btn-radius btn-sm">Level 04 - Are you Fishing?</a><br/><br/>
				<a href="Level05/level05login.php" class="btn btn-primary btn-lg btn-radius btn-sm">Level 05 - Capture The Fish 02</a><br/>
				<br/>
	</td>
	<td>
		<h6>Level : Medium</h6><br/>
				<a href="Level06/level06login.php" class="btn btn-warning btn-lg btn-radius btn-sm">Level 06 - BLIND FISHING</a><br/><br/>
				<a href="Level07/level07login.php" class="btn btn-warning btn-lg btn-radius btn-sm">Level 07 - BEWARE OF BOMBS</a><br/><br/>
				<a href="Level08/level08login.php" class="btn btn-warning btn-lg btn-radius btn-sm">Level 08 - CAPTURE SHARK FROM WIRE</a><br/><br/>


	</td>
	<td>
		<h6>Level : Hard</h6><br/>		
				<a href="Level09/level09login.php" class="btn btn-danger btn-lg btn-radius btn-sm">Level 09 - Try until the Fish Comes</a><br/><br/>
				<a href="Level10/level10login.php" class="btn btn-danger btn-lg btn-radius btn-sm">Level 10 - CAPTURE SHARK FROM WIRE 02</a><br/><br/>
		


	</td>



</tr>

</tbody>
</table>

<footer class="section footer-classic navbar-dark context-dark bg-primary">
     <br/> <h6 style="color:white;">Copyright IT18119336 Lokuge P.M.K./ IT18127492 Somasiri J.P.A.K. @SLIIT 2020</h6><br/>
</footer>
</body>
</html>