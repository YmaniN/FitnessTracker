    <link rel="stylesheet" href="csl.css">
<?php echo 
include("main.php"); if(!empty($_SESSION['user_login_in'])){ ?>


<Nav>
<ul>
  <li><a href="main.php">Home</a></li>
  <li><a href="controll.php?action=signup">Sign up</a></li>
  <li><a href="controll.php?action=login"">Login</a></li>

</ul>
</Nav>
 
<?php } ?>

