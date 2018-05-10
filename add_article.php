<?php
session_start();
		//Check whether the session variable username is present or not
		if (!isset($_SESSION['username']) || (trim($_SESSION['username']) == '')) {
			//user is not logged in
			echo "script>alert('Login to access the dashboard')</script>";
			echo "<script>window.open('admin_login.php','_self')</script>";
		}else{
			$sessionid=$_SESSION['username'];
		}
?>
<?php
if (isset($_POST['save_article'])){
	$article=$_POST['article'];
	$title=$_POST['title'];
	$image=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	require 'db.php';
	move_uploaded_file($image_tmp,"images/demo/$image");
	$query=$db->query("INSERT INTO articles (title,content,image) VALUES ('$title','$article','$image')");
	if ($query==true){
		echo "<script>alert ('Article added successfully')</script>";
	}else{
		echo mysqli_error($db);
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Boxing News | Admin Dashboard</title>
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

<section class="fl_left">
<h2>Admin Dashboard</h2>
</section>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
  
    <!-- content body -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>



<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/menu_styles.css" />
</head>
<body>
<div class="w3-content w3-section" style="max-width:900px""max-height:300">
 <div id="navigation">
    <div id="adminmenu">
      <ul>
        <li><a href="admin_home.php">Home</a></li>
		<li><a href="articles.php">Articles</a></li>
		<li><a href="add_article.php">Add Article</a></li>
		<li><a href="members.php">Members</a></li>
		<li><a href="index.php">View Website</a></li>
		<li><a href="logout.php">Log out</a></li>
      </ul>
    </div>
 </div>
 <div id="admin_content">
	 
	 <h2>Add a new article</h2>
	 <hr>
	<form action="add_article.php" method="post" enctype="multipart/form-data">
	<p><input type="text" placeholder="Title" name="title" required></p>
	<p><textarea rows="15" name="article" cols="50" required>Content</textarea></p>
	<p>Image <input type="file" name="image" required /></p>
	<p><input type="submit" value="SAVE" name="save_article"/></p>
	</form>
 </div>

    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Zaid Din</a></p>
  </footer>
</div>
</body>
</html>