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

<div class="w3-content w3-section" style="max-width:1000px""max-height:300">
  <p>News</p>

	
    <!-- main content -->
    <div id="homepage" class="clear">
      <section id="services" class="clear">
        <!-- article 1 -->
		<?php
		require 'db.php';
		$query=$db->query("Select * from articles");
		while ($rows=mysqli_fetch_array($query)){
			$articleID=$rows[0];
			$title=$rows[1];
			$content=$rows[2];
			$image=$rows[3];
		?>
        <article class="one_third">
          <h2><?php echo $title; ?></h2>
          <img src="images/demo/<?php echo $image; ?>" height="80" width="80" alt="">
          <p><?php echo $content; ?></p>
          <footer class="more"><a href="news_detail.php?articleID=<?php echo $articleID; ?>">Read More &raquo;</a></footer>
        </article>
		<?php } ?>	
      </section>
      <!-- Left Box 
      <section class="fl_left">
        <article>
          <h1>&lt;h1&gt; to &lt;h6&gt; - Headline Colour and Size Are All The Same</h1>
          <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="http://www.os-templates.com/template-terms">website template licence</a>.</p>
          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="http://www.os-templates.com/">free website templates</a>.</p>
        </article>
      </section>
      <!-- Right Box 
      <section class="fl_left">
        <article class="clear">
          <figure><img src="images/demo/125x125.gif" alt="">
            <figcaption>
              <h2>Indonectetus facilis leo nibh</h2>
              <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id.</p>
              <footer class="more"><a href="#">Read More &raquo;</a></footer>
            </figcaption>
          </figure>
        </article>
      </section>
	  -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Zaid Din | </a></p>
	<p  class="fl_left"><a href="admin_login.php"> Admin Control panel</a></p><p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Zaid Din</a></p>
  </footer>
</div>
</body>
</html>
