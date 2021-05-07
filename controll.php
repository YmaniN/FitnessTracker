
<?php
$servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");
require("connect.php");

$signup = $_POST ['signup'] ?? NULL;
$login = $_POST ['login'] ?? NULL;


if($_SERVER['REQUEST_METHOD'] == 'GET'){
$action = $GET['action'] ?? NULL;
$id = $_GET['id'] ?? NULL;

	if($action == "login"){
 	include ('LogIn.php');
	}else if($action == "signup"){
 	include ('SignUp.php');
	}
}

	else {
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$action = $_POST['action'] ?? NULL;

		}if($action == 'signup'){
	if(isset($_POST['username'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$user_password = $_POST['user_password'];
	signup($username, $email, $age, $user_password);
}
}

if($action == 'login'){
            if (isset($_POST['username'])){ 
                $username = $_POST['username'];
                $user_password = $_POST['user_password'];
                login($username,$user_password);
		header("Location: fitness.php");
}
}
}
}


?>



<html>
  <head>

    <!-- metadata, scripts, etc, -->
    <title>Fitness App.html</title>

    <link rel="stylesheet" href="csl.css">
  </head>

  <body>

    <!-- content of webpage -->
    <h1>Workout EX</h1> 
      <a href="About.html">About</a>
      <a href="ContactUs.html">Contact</a>
      <a href="Store.html">Store</a><br>
      <a href="SignUp.php">Sign up</a>
      <a href="LogIn.php">Log in</a><br>
      
    <img src="logo.png" alt="fitness picture" class="rp" style='position:absolute; top:0; right:0;' width='' height='' alt=''><br>
    <img src="logo.png" alt="fitness picture" class="lp" style='position:absolute; top:0; left:0;' width='' height='' alt=''><br>
  </body>
</html>
