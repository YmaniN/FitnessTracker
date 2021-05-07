<?php
require "connect.php";
//$readfile('LogIn.html');
//$readfile('About.html');
//$readfile('ContactUs.html');
//$readfile('SignUp.html');
//$readfile('Store.html');
//$readfile('person.html');


$username = $_POST['username'];
$password = $_POST['password'];

$sql_Login = "SELECT * FROM Login WHERE username = '$username' AND password = '$password'");
$res_Login_u = mysqli_query($conn, $sql_Login_u);

if($username == NULL OR $password == NULL){
	$result = "You must fill in the login information in order to access a personalized page.";
	print($result);
}else if(mysql_num_rows($sql_Login) != 0){
	$result = "Welcome back! Let's log those workouts!";
	print($result);
} else {

	$result = "Wrong information. Try again or use the sign up link";
	print($result);
?>

