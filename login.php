<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Boxing News</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#"></a></h1> <img src="logo2.jpg" style="width:400px""height:150">
      <h2></h2>
    </div>

<form method="get" action="http://www.google.com/search"> <div <table border="0" cellpadding="0"> <tr><td> <input type="text" name="q" size="25" maxlength="255" value="" /> <input type="submit" value="Google Search" /></td></tr> <tr><td align="center" style="font-size:75%"></td></tr></table> </div> </form>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
		<li><a href="login.php"> Member Login</a></li>
		
        <?php
		//Check whether the session variable username is present or not
		if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
			//user is not logged in
		}else{
			echo "<li class='last'><a href='logout.php'>Log Out</a></li>";
		}?>
		<li><a href="admin_login.php">Admin Dashboard</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
  
    <!-- content body -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-content w3-section" style="max-width:900px""max-height:300">

<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    echo "<script>window.open('index.php','_self')</script>";
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{ 
       
    
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>

    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Zaid Din | </a></p>
	<p  class="fl_left"><a href="admin_login.php"> Admin Control panel</a></p>
  </footer>
</div>
</body>
</html>