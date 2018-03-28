<html>
<head>
<title>Students</title>
</head>
<body>
	<form action = "addStudent.php" method="POST">
	<p>Add new student:</p>
	<p>First Name: </p><input type= "text" name="firstName"/>
	<p>Last Name: </p><input type="text" name="lastName"/>
	<p>Grade:</p><input type="int" name="grade"/>
	<br/><br/>
	<input type= "submit" value="Add Student"/>
	</form>
	<br/>
	<p> Current Students: </p>
	
	<?php
		$username = "root";	
		$password = "";
		$hostname = "localhost";
		$dbname = "class";
		$con = mysqli_connect($hostname, $username, $password, $dbname) or die("rip");
		
		$result = mysqli_query($con,"SELECT * FROM students");
		echo "<table border='1'>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Grade</th>
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['firstName'] . "</td>";
			echo "<td>" . $row['lastName'] . "</td>";
			echo "<td>" . $row['grade'] . "</td>";
			echo "</tr>";
		}
		echo "</table>"
	?>
</body>
</html>