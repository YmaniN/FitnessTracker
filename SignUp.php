<!DOCTYPE html>

<html>
  <head>
    <!-- metadata, scripts, etc, -->
    <title>Fitness App.html</title>
    <link rel="stylesheet" href="csl.css">
  </head>

  <body>
    <!-- content of webpage -->
    <h1>Sign Up Page!</h1>
      <a href="About.html">About</a>
      <a href="ContactUs.html">Contact</a>
      <a href="Store.html">Store</a><br>
      <a href="SignUp.php">Sign up</a>
      <a href="LogIn.php">Log in</a><br>
      <p>So you're ready to get that summer "BOD" you need to look good on the beach! Just give us all your
         personal information (that we won't use for any other purpose than to track your every muscle) and
         sign in.</p>
    <h2>Sign Up</h2>
<form action = "controll.php" method = "POST">

<input type = "hidden" name = "action" value = "signup">
Username: <input type="text" name="username" id="username"  maxlength="50" pattern="[a-zA-Z- ]+{1,50}" class = "left" required><br>

Email: <input type="text" id="emailAddress" name="emailAddress" position = "left" class = "left" required><br>

Age: <input type="text" id="age" name="age" size="2" min="17" max="30" style = 'position:relative; left:100;' required><br>

Male: <input type="radio" id="gender" name="gender" value="male" required><br>
Female: <input type="radio" id="gender" name="gender" value="female" required><br>

Password: <input type="password" id="user_password" name="user_password" maxlength="50" pattern="[a-zA-Z- ]+{1,50}" required><br>
      <input type="submit" value = "signup">

    <img src="logo.png" alt="fitness picture" class="rp" style='position:absolute; top:0; right:0;' width='' height='' alt=''><br>
    <img src="logo.png" alt="fitness picture" class="lp" style='position:absolute; top:0; left:0;' width='' height='' alt=''><br>
<form>
  </body>
</html>
