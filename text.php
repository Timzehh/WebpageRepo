<html>
<head>
<title>Server</title>
</head>
<body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "aaa";
$tbname = "users";

//$username = "admin";
//$password = "pass";

$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error)
{
	die("Connection failed, " . $conn ->connect_error);
}
echo "Connected Succesfully\n";

$sql = "CREATE DATABASE IF NOT EXISTS" . $dbname;
if($conn->query($sql) === TRUE) {
	echo "Database created and connected to succesfully\n";
}
else{
	echo "The database has not been created\n";
}
	
mysqli_select_db($conn, $dbname);
$sql = "CREATE TABLE IF NOT EXITS " . $tbname . " 
(Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username TEXT(20), 
password TEXT(30)";
?>
</body>
</html>