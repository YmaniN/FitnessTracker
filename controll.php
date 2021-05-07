
<?php
//$servername = "localhost";
//$user = "student";
//$password = "CompSci364";
session_start();

// Create connection
//$conn = new mysqli($servername, $user, $password, "student");
include("page.php"); 
require("connect.php");

$signup = $_POST ['signup'] ?? NULL;
$login = $_POST ['login'] ?? NULL;


if($_SERVER['REQUEST_METHOD'] == 'GET'){
$action = $_GET['action'] ?? NULL;
$id = $_GET['id'] ?? NULL;

	if($action == "login"){
 	include ('LogIn.php');

	}else if($action == "signup"){
 	include ('SignUp.php');
	} //else if($action == "logout"){
		//logout();
		//header("Location: controll.php");
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
		if ($username == 'JamesLee_14') {
    header("Location: http://localhost/~ymani/FitnessTracker-main/fitness.php");
} 
}
}

}
?>




