 <?php


$db = mysqli_connect('localhost', 'root', '', 'CTF');
$errors = array();
    
if(isset($_POST['keyInput09']))
{
	$key = mysqli_real_escape_string($db, $_POST['keyInput09']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE levelkey='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		
			header("location: level09.php");
			$_SESSION['key']  = $key;	
		
    	}
    	else 
    	{
      		header("location: error.php");
    	}

	}
	

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CATCH THE FISH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="../bootstrap.min.css" rel="stylesheet">
	<link href="../buttons.css" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="">
				
				

				<h3 style="color:white;">LEVEL 09 - Capture The Fish</h3>
				<br/>	<br/>
			<form method="POST" action="level09login.php">
				<label style="color:white;">Enter Key: </label> <input type="" name="keyInput09"><br/><br/>
				<button type="submit" class="btn btn-dark btn-lg btn-radius">Submit</button>
			</form>
				
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="../endor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>

</body>
</html>