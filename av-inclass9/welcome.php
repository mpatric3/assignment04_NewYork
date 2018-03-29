<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "exercise9";
	$dbpass = "coffee";
	$dbname = "exercise9";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Usually this data would come from HTML form values in $_POST
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['phone']));
	
	// You really should escape all strings
	//$insertData = mysqli_real_escape_string($connection, $insertData);
	
	// 2. Perform database query
	$query  = "INSERT INTO myTable (name, email, phone) VALUES ('$name', '$email', '$phone')";
	$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<body>
	<h1>Database Insert</h1>
	<p>Welcome <?php echo $_POST["name"]; ?> <br><br>
	Your email address is: <?php echo $_POST["email"]; ?> <br><br>
	Your phone number is: <?php echo $_POST["phone"]; ?> <br><br>

<?php
	if ($result) {
		echo "Sucess! The query did not error out!";
	} else {
		die ("Database query failed");
	}
?>

</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>