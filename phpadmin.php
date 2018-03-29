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






$result = mysqli_query($conn,"SELECT * FROM customer");
echo "<table border='1'>
			<tr>
			<th>CID</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['CID'] . "</td>";
			echo "<td>".$row['FN'] . "</td>";
			echo "<td>".$row['LN'] . "</td>";
			echo "<td>".$row['Email']."</td>"; 
			echo "</tr>";
		}
		echo "</table>";
		
$result = mysqli_query($conn,"SELECT * FROM phone");
echo "<table border='1'>
			<tr>
			<th>CID-Phone-ID</th>
			<th>CID</th>
			<th>Phone</th>
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['CID-Phone-ID'] . "</td>";
			echo "<td>".$row['CID'] . "</td>";
			echo "<td>".$row['Phone'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		
$result = mysqli_query($conn,"SELECT * FROM order");
echo "<table border='1'>
			<tr>
			<th>Order-SockID</th>
			<th>Order-CustID</th>
			<th>SockID</th>
			<th>CharityID</th>
			<th>Quantity</th>
			</tr>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['Order-SockID'] . "</td>";
			echo "<td>".$row['Order-CustID'] . "</td>";
			echo "<td>".$row['SockID'] . "</td>";
			echo "<td>".$row['CharityID'] . "</td>";
			echo "<td>".$row['Quantity']."</td>";
			echo "</tr>";
		}
		echo "</table>";

$result = mysql_query('SELECT SUM(quantity) AS quantity FROM order'); 
$row = mysql_fetch_assoc($result); 
$sum = $row['quantity'];
echo $qty;
?>