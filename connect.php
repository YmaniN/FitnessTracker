
<?php

function login($username, $user_password){
$servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");
Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$user_password =  password_hash($user_password,PASSWORD_DEFAULT);
$select = "SELECT username, user_password FROM AthUser
    WHERE username = \"$username\"";

$statement = $conn->prepare($select);
$statement->execute();
$results = $statement->fetch();
$statement->closeCursor();
if(password_verify($user_password, $results["password"])) {
    echo 'Password is valid!';
    $_SESSION["user_login_in"] = true;
    $_SESSION['user'] = $username;
}else {
    echo 'Invalid password.';

 }  


}

function SignUp($username, $user_password, $phone_number, $weight, $height){
 $servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");

$insert = "INSERT INTO AthUser (username, user_password, phone_number, weight, height) VALUES (:username, :user_password,
:phone_number, :weight, :height)";
$statement = $db->prepare($insert);
$statement->bindValue(':username',$username);
$statement->bindValue(':user_password',$user_password);
$statement->bindValue(':phone_number',$phone_number);
$statement->bindValue(':weight',$weight);
$statement->bindValue(':height',$height);
$statement->execute();
$statement->closeCursor();
header("Location:controller.php?action=signup");
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
