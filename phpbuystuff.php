<?php
$servername = "localhost";
$username = "root";
$password = "test";
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
echo $First, $Last, $email, $pass;
mysqli_query($conn, "Insert Into customer (FN, LN, Email, Password) Values('i', 'hate', 'this, 'yes')");

/*$CCNum = $_POST['CCNum'];
$CCcvs = $_POST['CCCVS'];
$CDate = $_POST['CDate'];
mysqli_query($conn, "Insert Into CreditCard (CC#, CVS, cDate) Values($CCNum, $CCcvs, $CDate)");


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