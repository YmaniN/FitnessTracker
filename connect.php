
<?php

function login($username, $user_password){
$servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");

//if ($conn->connect_error) {
 //die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";

$user_password =  password_hash($user_password,PASSWORD_DEFAULT);
$select = "SELECT username, user_password FROM AthUser
    WHERE username = \"$username\"";

$statement = $conn->prepare($select);
$statement->execute();
$results = $statement->fetch();
$statement->closeCursor();

if(password_verify($user_password, $results["password"])) {
    echo 'Password is valid!';
    $_SESSION["AthUser"] = true;
    $_SESSION['user'] = $username;
}else {
    echo 'Invalid password.';


 } 



function SignUp($username, $user_password, $phone_number, $weight, $height){

$servername = "localhost";
$user = "student";
$password = "CompSci364";

// Create connection
$conn = new mysqli($servername, $user, $password, "student");

$user_password =  password_hash($user_password,PASSWORD_DEFAULT);
$insert = "INSERT INTO AthUser (username, user_password, phone_number, weight, height) VALUES (:username, :user_password,
:phone_number, :weight, :height)";

$statement = $conn->prepare($insert);
$statement->bindValue(':username',$username);
$statement->bindValue(':user_password',$user_password);
$statement->bindValue(':phone_number',$phone_number);
$statement->bindValue(':weight',$weight);
$statement->bindValue(':height',$height);
$statement->execute();
$statement->closeCursor();
header("Location:controller.php?action=signup");
}
}
//function logout(){
//unset($_SESSION["AthUser"]);
//echo "LOGGED OUT";
//}

?>

