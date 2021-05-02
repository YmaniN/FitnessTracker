<?php
$servername = "localhost";
$user = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $user, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE FitnessModelUserTable.sql";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
