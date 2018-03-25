<?php

//Step 1: Create a database connection
$dbhost = "localhost"; 
$dbuser = "test2"; 
$dbpass = "coffee"; 
$dbname = "Assignment4"; 
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Step 2: Perform the database query
$query = "SELECT * FROM myTable";
$result = mysqli_query($connection, $query);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Excercise 9</title>
</head>
	<body>



<?php
	$query  = "SELECT * FROM friends";
	$result = mysqli_query($connection, $query);
?>

	<h1>My Friends </h1>

	<table border>
		<tr>

			<th>Name</th>
			<th>Email</th>
		</tr>


<?php
	while($data=mysqli_fetch_assoc($result)){
			?>


		<tr>
				<td><?php echo $data["name"]; ?></td>
				<td><?php echo $data["email"]; ?></td>
		</tr>

<?php } ?>
	</table>



<ul>

<?php
		while ($myData = mysqli_fetch_assoc($result)) {
			echo $myData["myColumn"];

?>

			<li><?php echo $myData["myColumn"]; ?></li>

<?php } ?>


	</body>

</html>

<?php

mysqli_free_result($result);
mysqli_close($connection);

?>
