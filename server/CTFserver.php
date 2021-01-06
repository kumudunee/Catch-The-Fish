<?php
session_start();
$username = $_SESSION['username'];
$key = "";
$code = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'CTF');

if(isset($_POST['level01key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key01']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
		
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
      		$user_query = "SELECT points FROM users WHERE username = '$username' ";
			$keyresult = mysqli_query($db, $keyquery);
			$points01 = 10;
			$user_query_update = "UPDATE 'users' SET 'points' = $points01 WHERE 'users'.'username' = $username ";
			$_SESSION['points'] = $points01;
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level02key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key02']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level03key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key03']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level04key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key04']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level05key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key05']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level06key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key06']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level07key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key07']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level08key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key08']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level09key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key09']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}

if(isset($_POST['level10key']))
{
	$key = mysqli_real_escape_string($db, $_POST['key10']);

	if (empty($key)) 
	{
   	 array_push($errors, "Key is required");
  	}

	if(count($errors) == 0)
	{

		$query = "SELECT * FROM levelkeys WHERE keycode='$key' ";
		$results = mysqli_query($db, $query);
	
		if (mysqli_num_rows($results) == 1) 
		{
      		$keyquery = "SELECT levelkey FROM levelkeys WHERE keycode='$key'";
			$keyresult = mysqli_query($db, $keyquery);
			
			while($row = mysqli_fetch_array($keyresult))
			{
				echo "<br>". $row["levelkey"]."<br>";


			}

			
			
		
    	}
    	else 
    	{
      		echo "Invalid Key";
    	}

	}
	

}
?>