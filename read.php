<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcsccon3_newyor";
	$dbpass = "coffee1N";
	$dbname = "urcsccon3_newyork";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM myTable";
	$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Read</title>
</head>
<body>

	<h1>Database Read</h1>

<ul>
<?php
	// 3. Use returned data (if any)
	while($data = mysqli_fetch_assoc($result)) {
?>

<li><?php echo $data["name"]; ?></li>
<li><?php echo $data["email"]; ?></li>
<li><?php echo $data["careers"]; ?></li>

<?php } ?>
</ul>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>