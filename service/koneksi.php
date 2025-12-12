<?php
$servername = "192.168.254.231";
$username = "root";
$password = "rahasiapusat";
$dbname = "absensi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

