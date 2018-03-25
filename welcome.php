<?php

//Step 1: Create a database connection
$dbhost = "localhost"; 
$dbuser = "test2"; 
$dbpass = "coffee"; 
$dbname = "Assignment4"; 
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



$name= Trim(stripslashes($_POST['name']));
$email= Trim(stripslashes($_POST['email']));



//Step 2: Perform the database query
$query = "INSERT INTO table (name, email) VALUES ('$name', '$email')";
$result = mysqli_query($connection, $query);

?>




<!DOCTYPE html>
<html>


<head>
	<title> Table</title>
</head>
	<body>

	<?php echo $name; ?><br><br>
	<?php echo $email; ?>
</body>
</html>

<?php
mysqli_close($connection);
?>

<ul>