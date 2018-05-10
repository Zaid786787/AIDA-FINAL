<?php
session_start();
?>
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

<form method="get" action="http://www.google.com/search"> <div <table border="0" cellpadding="0"> <tr><td> <input type="text" name="q" size="25" maxlength="255" value="" /> <input type="submit" value="Google Search" /></td></tr> <tr><td align="center" style="font-size:75%"></td></tr></table>
<p>
<?php
//Check whether the session variable username is present or not
if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
    //user is not logged in
}else{
	$session_id=$_SESSION['username']; //getting the username
	echo "<h3>Welcome ".$session_id."</h3>";
}?>
</p>
 </div> </form>

    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contactus.php">Contact us</a></li>
		
        <?php
		//Check whether the session variable username is present or not
		if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
			//user is not logged in
			echo "<li><a href='login.php'>Member Login</a></li>";
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
  <p><h3>Contact Us</h3></p>

<title>Form submission</title>

<form action="contactus.php" method="post">
<p>First Name:</p> <input type="text" name="first_name" pattern="^[a-zA-Z -]{1,20}" placeholder=""><br>
<p>Last Name:</p> <input type="text" name="last_name"><br>
<p>Email:</p> <input type="email" required ><br>
<p>Message:</p><textarea rows="5" name="message" cols="60"></textarea><br>
<p><input type="submit" name="submit" value="Submit"></p>
</form>

<?php 
if(isset($_POST['submit'])){
    $to = "admin@zaiddin.co.uk"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "E-mail sent. Thank you " . $first_name . ", we will reply back within 24hours";
    }
    
$successMessage = "";
    	
    $errorMessage = "";
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

        	$first_name = $_POST['first_name'];
        	$last_name = $_POST['last_name'];
        
        	if(!ctype_alpha($first_name) || !ctype_alpha($last_name)) {
        		$errorMessage = "Please key in alphabets lower or upper case, character numbers between 1-20";
    
                    } else {
                  echo $successMessage;
}
	    
	}

?>

  <hr>
    <!-- / content body -->
  </div>
  <div class="w3-content w3-section" style="max-width:900px""max-height:300">
  <p><h3>Our Location</h3></p>
  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=london&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/google-maps/">https://www.pureblack.de/google-maps/</a></div><style>.mapouter{overflow:hidden;height:500px;width:600px;}.gmap_canvas {background:none!important;height:500px;width:600px;}</style></div>
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
