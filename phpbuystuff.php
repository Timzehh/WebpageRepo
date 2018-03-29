<?php
$servername = "localhost";
$username = "root";
$password = "Aviano12";
$db = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$First = $_POST['FName'];
$Last = $_POST['LName'];
$email = $_POST['Email'];
$pass = $_POST['Password'];

$CCNum = $_POST['CCNum'];
$CCcvs = $_POST['CCCVS'];
$CDate = $_POST['CDate'];

$phone = $_POST['pn'];

$Build = $_POST['bld']
$Room = $_POST['Room']
/*echo $First, $Last, $email, $pass;
echo $CCNum, $CCcvs, $CDate;*/
echo $phone;

mysqli_query($conn, "
INSERT INTO customer (FN, LN, Email, Password) Values('$First', '$Last', '$email', '$pass');
");

mysqli_query($conn, "
INSERT INTO creditcard (CCN, CVS, cDate) Values($CCNum, $CCcvs, $CDate)
");

mysqli_query($conn, "
INSERT INTO phone (CID, Phone) Values('6', '$phone')
");

mysqli_query($conn, "
INSERT INTO building (Building, Room) Values($Build, $Room)
");

$result = mysqli_query($conn,"SELECT * FROM phone");
echo "<table border='1'>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Password</th>
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['Phone'] . "</td>";
			echo "<td>".$row['CCN'] . "</td>";
			echo "<td>".$row['CVS'] . "</td>";
			echo "<td>".$row['cDate']."</td>"; 
			echo "</tr>";
		}
		echo "</table>"
		

?>