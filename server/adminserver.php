<?php 

$keycode = "";
$masterkey = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'CTF');
//$sql = "UPDATE `levelkeys` SET `keycode` = 'WaZILIXs6VGo9qP5VjPwRaS5y0CCkoQX' WHERE `levelkeys`.`id` = 1;"

if(isset($_POST['key01submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode01']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey01']);

	if(empty($keycode))
	{
		array_push($errors, "Code 01 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 01 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 1";
		$results = mysqli_query($db, $query);
		$_SESSION['msg01'] = "Level 01 key updated successfully";

	}


}

if(isset($_POST['key02submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode02']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey02']);

	if(empty($keycode))
	{
		array_push($errors, "Code 02 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 02 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 2";
		$results = mysqli_query($db, $query);
		$_SESSION['msg02'] = "Level 02 key updated successfully";
	}


}

if(isset($_POST['key03submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode03']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey03']);

	if(empty($keycode))
	{
		array_push($errors, "Code 03 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 03 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 3";
		$results = mysqli_query($db, $query);
		$_SESSION['msg03'] = "Level 03 key updated successfully";
	}


}

if(isset($_POST['key04submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode04']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey04']);

	if(empty($keycode))
	{
		array_push($errors, "Code 04 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 04 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 4";
		$results = mysqli_query($db, $query);
		$_SESSION['msg04'] = "Level 04 key updated successfully";
	}


}

if(isset($_POST['key05submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode05']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey05']);

	if(empty($keycode))
	{
		array_push($errors, "Code 05 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 05 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 5";
		$results = mysqli_query($db, $query);
		$_SESSION['msg05'] = "Level 05 key updated successfully";
	}


}

if(isset($_POST['key06submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode06']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey06']);

	if(empty($keycode))
	{
		array_push($errors, "Code 06 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 06 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 6";
		$results = mysqli_query($db, $query);
		$_SESSION['msg06'] = "Level 06 key updated successfully";

	}


}

if(isset($_POST['key07submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode07']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey07']);

	if(empty($keycode))
	{
		array_push($errors, "Code 07 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 07 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 7";
		$results = mysqli_query($db, $query);
		$_SESSION['msg07'] = "Level 07 key updated successfully";
	}


}

if(isset($_POST['key08submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode08']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey08']);

	if(empty($keycode))
	{
		array_push($errors, "Code 08 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 08 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 8";
		$results = mysqli_query($db, $query);
		$_SESSION['msg08'] = "Level 08 key updated successfully";
	}


}

if(isset($_POST['key09submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode09']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey09']);

	if(empty($keycode))
	{
		array_push($errors, "Code 09 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 09 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 9";
		$results = mysqli_query($db, $query);
		$_SESSION['msg09'] = "Level 09 key updated successfully";
	}


}

if(isset($_POST['key10submit']))
{
	$keycode = mysqli_real_escape_string($db, $_POST['keycode10']);
	$masterkey = mysqli_real_escape_string($db, $_POST['masterkey10']);

	if(empty($keycode))
	{
		array_push($errors, "Code 10 is Required");
	}
	if(empty($masterkey))
	{
		array_push($errors, "Unlock Key 10 is Required");
	}

	if(count($errors) == 0)
	{
		$query = "UPDATE levelkeys SET keycode = '$keycode', levelkey = '$masterkey' WHERE levelkeys.id = 10";
		$results = mysqli_query($db, $query);
		$_SESSION['msg10'] = "Level 10 key updated successfully";
	}


}

?>