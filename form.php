<?php
	// Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_newyor";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_newyork";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Test connection
	//if (!$connection) {
	//	die("connection failed");
	//}
	//echo "success!";

	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$careers = Trim(stripslashes($_POST['careers']));
	
	
	// Perform database query
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
	<h1>Thank you!</h1>
	<p>Thank you for your feedback, <?php echo $_POST["name"]; ?>! <br><br>

</body>
</html>

<?php
	mysqli_close($connection);
?>