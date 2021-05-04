<?php
$id = (INPUT_POST, 'id'); 
  $username = (INPUT_POST, 'username');
  $user_password = (INPUT_POST, 'user_password');
  $phone_number = (INPUT_POST, 'phone_number');
  $weight = (INPUT_POST, 'weight');
  $height =(INPUT_POST, 'height');
$servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else{
	$sql = "SELECT * FROM Login (username, user_password) VALUES ('$username', '$user_password')";
if($conn->query($sql)){
echo "Read successfully";
} else {
echo "Error: ". $sql ."
". $conn->error;
}
}
}
?>
