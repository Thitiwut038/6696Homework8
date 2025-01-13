<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ข้อมูลพนักงาน7eleven";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>