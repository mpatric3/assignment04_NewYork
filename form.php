<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcsccon3_newyor";
	$dbpass = "coffee1N";
	$dbname = "urcsccon3_newyork";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Usually this data would come from HTML form values in $_POST
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['careers']));
	
	// You really should escape all strings
	//$insertData = mysqli_real_escape_string($connection, $insertData);
	
	// 2. Perform database query
	$query  = "INSERT INTO myTable (name, email, careers) VALUES ('$name', '$email', '$careers')";
	$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thank you!</title>
</head>
<body>
	<h1>Thank you</h1>
	<p>Thank you for your feedback <?php echo $_POST["name"]; ?> <br><br>

</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>