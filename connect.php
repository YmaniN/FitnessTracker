<?php
$servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
