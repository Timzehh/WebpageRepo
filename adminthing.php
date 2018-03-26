<html>
<head>
<style type="text/css"> 
<!-- .tab { margin-left: 40px; }-->
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
th {
    text-align: Middle;
}
</style>
<title>SockSite -ADMIN-</title>
</head>
<body>

<label for="fstQty">Sock Data:</label> 

<table style="width:100%">
  <tr>

	<th>Total number of Socks sold</th>
    <th>Number of ESU large socks sold</th> 
	<th>Socks that need to be delivered</th>
  </tr>
  <tr>
    <td>1</td>
	<td>2</td>
	<td>3</td>
  </tr>

	<br>
	
	<table style="width:100%">
  <tr>

	<th>Charity</th>
    <th>Number of socks sold for charity</th> 
  </tr>
  <tr>
    <th>Doctors without Borders</th>
	<th>10</th>
  </tr>
  <tr>
	<th>WWF</th>
	<th>12</th>
   </tr>

	<br>
	
	
<table style="width:100%">
<br><label for="fstQty">Prepare for Delivery:</label> <br>
  <tr>

	<th>Sock</th>
	<th>Color</th>
    <th>Amount</th> 
	<th>First Name</th> 
	<th>Last Name</th> 
	<th>Building Name</th>
	<th>Room #</th>
  </tr>
  <tr>
    <td>Large Sock</td>
	<td>Blue</td>
    <td> 2</td> 
	<td>Kurt</td> 
	<td>O'leary</td> 
	<td>Bill</td>
	<td>1 </td>
  </tr>
  <tr>
    <td>Medium Sock</td>
	<td>Neon Green </td>
    <td>3</td> 
	<td>Tim</td> 
	<td>Kelly</td> 
	<td>ding</td>
	<td>2</td>
  </tr></tr>

  


	
	
	
<table style="width:100%">
   <br><label for="fstQty">Charity Stats:</label><br><tr>

	<th>Charity</th>
    <th># for charity</th> 
  </tr>
  <tr>
    <td>Doctors Without Borders</td>
    <td> 10</td> 
  </tr>
  <tr>
    <td>Wounded Warrior Project</td>
    <td>7</td> 
  </tr>
</table>
<br><br><br>
<label for="addcharity">Charity Name:  </abbr></label>
<input id="addcharity" type="text" name="addcharity">
<input type= "submit" value="Add Charity"/>
<br><br><br>

<label for="addcharity">Search by Email:  </abbr></label>
<input id="addcharity" type="text" name="addcharity">
<input type= "submit" value="Search"/>
<br><br><br>

		<?php
		$username = "root";	
		$password = "";
		$hostname = "localhost";
		$dbname = "itemsSold";
		$con = mysqli_connect($hostname, $username, $password, $dbname) or die("rip");
		
		$result = mysqli_query($con,"SELECT * FROM customer");
		echo "<table border='1'>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Size</th>
			<th>Color</th>
			<th>Building</th>
			<th>Room</th>
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