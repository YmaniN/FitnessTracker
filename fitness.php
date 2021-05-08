<?php
session_start();
include("connect.php");

?>

<html>
  <head>
    <!-- metadata, scripts, etc, -->
    <title>Fitness App.html</title>

    <link rel="stylesheet" href="csl.css">

<body>

<!-- content of the webpage-->

<h1>Let's get to it!</h1> <!-- want to add name of user by $get variable -->

<img src="av1.png" alt="coachFrank" style = 'position:center; top:75;' width = '150' height = '160'><br>

<p>Coach Frank here! I hope you weren't a coach potato today! Log those workouts! I want to see you sweat! If you're not dying, you're not trying! Not get down and give me 50 more!</p>

<img src="logo.png" alt="fitness picture" class = "rp" style='position:absolute; top:0; right:0;' width='' height='' alt=''><br>
    <img src="logo.png" alt="fitness picture" class="lp" style='position:absolute; top:0; left:0;' width='' height='' alt='' ><br>

<p1>Your workout today is: </p1>
<!-- depending on body type give a workout list (big, medium, small, etc.) -->
  </body>
</head>
</html>
