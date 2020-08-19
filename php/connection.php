<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$db="fys1";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
