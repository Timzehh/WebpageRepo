<?php
$servername = "localhost";
$username = "root";
$password = "Dogsrock57!";
$db = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$First = $_POST['FName'];
$Last = $_POST['LName'];
$email = $_POST['Email'];
$pass = $_POST['Password'];

$CCNum = $_POST['CCNum'];
$CCcvs = $_POST['CCCVS'];
$CDate = $_POST['CDate'];

echo $First, $Last, $email, $pass;
echo $CCNum, $CCcvs, $CDate;
mysqli_query($conn, "
INSERT INTO customer (FN, LN, Email, Password) Values('$First', '$Last', '$email', '$pass');
");

mysqli_query($conn, "
INSERT INTO creditcard (CID, CC#, CVS, cDate) Values(SCOPE_IDENTITY(),'$CCNum', '$CCcvs', '$CDate')
");

/*

$result = mysqli_query($conn,"SELECT * FROM Customer");
echo "<table border='1'>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Grade</th>
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['FName'] . "</td>";
			echo "<td>" . $row['LName'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "</tr>";
		}
		echo "</table>"*/

?>