<?php

	$username = "root";	
	$password = "";
	$hostname = "localhost";
	$dbname = "class";
	$con = mysqli_connect($hostname, $username, $password, $dbname) or die("rip");

	$myfirstname = $_POST['firstName'];
	$mylastname = $_POST['lastName'];
	$mygrade = $_POST['grade'];
	
	$myfirstname = stripslashes($myfirstname);
	$mylastname = stripslashes($mylastname);
	$mygrade = stripcslashes($mygrade);
	
	$sql = mysqli_query($con,"INSERT INTO students(firstName, lastName, grade) VALUES('$myfirstname', '$mylastname', '$mygrade')");
	if(!$sql)
	{
		echo mysql_error();
	}
	else
	{	header("Location: class.php");}

?>