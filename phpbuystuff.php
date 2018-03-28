<?php
$servername = "localhost";
$username = "root";
$password = "aviano12";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$name = $_POST['FName'];
echo $name;
echo $_POST['LName'];
?>