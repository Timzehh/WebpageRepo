<?php
		//in the users table under privilages it has a list of allowed users root is one of them
		//localhost tells it its on your system, and dbname is just the name of the database that your created
	$username = "root";	
	$password = "";
	$hostname = "localhost";
	$dbname = "login";
	
		//This line connects you to the database
	$con = mysqli_connect($hostname, $username, $password, $dbname) or die("rip");
	
		//these two lines get the username and the password the user entered on test.php
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
		
		//these two lines stop people from trying to break into your code by getting rid of the slahes 
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
		//this code compares your usesrname and password to what is in the database
		//Username and password are the fields you entered in before when making the table users
		// result goes to the database and compares what you entered to what there is in the database
		//if result succeeds count becomes a one 
	$query = "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	
	if($count == 1)
	{
		echo 'YOUR IN';
		echo "<br />";
		echo "redirecting";
			//once login is succesful this line moves you to a new page
		header("Location: class.php");
	}
	else
	{
		echo "Username or password are incorrect";
	}
?>