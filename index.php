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
  
  <p><font face="Impact" size="5" color="#DF0101"><marquee behavior="scroll" direction="left">Welcome To The Home Of Boxing News</marquee></font></p>

  <img class="mySlides w3-animate-fading" src="images/demo/Floyd.jpg" style="width:900px""height:500">
  <img class="mySlides w3-animate-fading" src="images/demo/golovkin.jpg" style="width:900px""height:500">
  <img class="mySlides w3-animate-fading" src="images/demo/canelo.jpg" style="width:900px""height:500">
  <img class="mySlides w3-animate-fading" src="images/demo/manny_pacquiao.jpg" style="width:900px""height:500">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>
	
    <!-- main content -->
    <div id="homepage" class="clear">
      <section id="services" class="clear">
        <!-- article 1 -->
        <article class="one_third">
         <h2>Carl Frampton fights Nonito Donaire in Belfast on April 21</h2>
          <img src="images/cf.jpg" alt="">
          <p>Former world champions Carl Frampton and Nonito Donaire will meet at the SSE Arena, Belfast in April. Rumoured for a while, the featherweight clash between former world champions Carl Frampton and Nonito Donaire has now been confirmed for April 21 at the SSE Arena, Belfast. BT Sport and BoxNation will televise in the UK.</p>
          
        </article>
        <!-- article 2 -->
        <article class="one_third">
          <h2>Victor Ortiz will fight Devon Alexander</h2>
          <img src="images/vo.jpg" alt="">
          <p>Former stars Victor Ortiz and Devon Alexander look to recapture past glories. The two will headline a show topped by two USA vs. Mexico battles as the former welterweight champions meet in the 12-round main event of Premier Boxing Champions on FOX and FOX Deportes Saturday, Feb. 17 from Don Haskins Center on the UTEP campus in El Paso, Texas with televised coverage starting at 8 p.m. ET/5 p.m. PT.</p>
       
        </article>
        <!-- article 3 -->
        <article class="one_third lastbox">
          <h2>Tyson Fury no closer to getting boxing licence back</h2>
          <img src="images/tf.jpg" alt="">
          <p>Tyson Fury still not responded to Board of Control’s pre-Christmas invitation. Tyson Fury is yet to have his suspension lifted by the British Boxing Board of Control after invitations from General Secretary Robert Smith to start the process were ignored by the former world heavyweight champion.</p>
          
        </article>
      </section>
	  <hr>
      <!-- Left Box -->
      <section class="fl_left">
        <article>
          <h1>Best fighters of 2017</h1>

        </article>
		
		<article class="one_third">
         <b><p class="solid"><p>1.</b> Gennady Golovkin</p>
          <img src="images/ggg.jpg" width="100" height="100">
		 <b><p>RECORD:</b> 37-0, 33 KOs</p>
          <b><p>DIVISION:</b> Middleweight (unified champion)</p>
          <b><p>LAST FIGHT:</b> D (UD12) Saul Canelo Alvarwz, September 16 2017</p></p>
        </article>
        
        <iframe width="280" height="200" src="https://www.youtube.com/embed/d7gc4wQrctY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
		<article class="one_third">
         <b><p class="solid"><p>2.</b> Vasyl Lomachenko</p>
          <img src="images/vl.jpg" width="100" height="100">
		  <b><p>RECORD:</b> 8-1, 5 KOs</p>
          <b><p>DIVISION:</b> Junior lightweight (titlist)</p>
          <b><p>LAST FIGHT:</b> W (TKO6) Guillermo Rigondeaux, Dec. 9, 2017</p></p>
        </article>
		
		<iframe width="280" height="200" src="https://www.youtube.com/embed/gXvC2pvI4Ms" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
				        <article class="one_third">
         <b><p class="solid"><p>3.</b> Terence Crawford</p>
          <img src="images/TC.jpg" width="100" height="100">
		  <b><p>RECORD:</b> 32-0, 23 KOs</p>
          <b><p>DIVISION:</b> Junior welterweight (unified champion)</p>
          <b><p>LAST FIGHT:</b> W (KO3) Julius Indongo, Aug. 19 2017</p></p>
        </article>
		
        <iframe width="280" height="200" src="https://www.youtube.com/embed/R7RCyo_6Ku8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
		<article class="one_third">
         <b><p class="solid"><p>4.</b> Canelo Alvarez</p>
          <img src="images/ca1.jpg" width="100" height="100">
		  <b><p>RECORD:</b> 49-1-2, 34 KOs</p>
          <b><p>DIVISION:</b> Middleweight</p>
          <b><p>LAST FIGHT:</b> D (MD12) Gennady Golovkin, Sept. 16 2017</p></p>
        </article>
        
        <iframe width="280" height="200" src="https://www.youtube.com/embed/ncNN8olHmtQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
		<article class="one_third">
         <b><p class="solid"><p>5.</b> Keith Thurman</p>
          <img src="images/kt.jpg" width="100" height="100">
		  <b><p>RECORD:</b> 28-0, 22 KOs</p>
          <b><p>DIVISION:</b> Welterweight (unified titlist)</p>
          <b><p>LAST FIGHT:</b> W (SD12) Danny Garcia, March 4. 2017</p></p>
        </article>
        
      <iframe width="280" height="200" src="https://www.youtube.com/embed/e3Dij0D-_LI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
      </section>
      <!-- Right Box -->
      <section class="fl_right">
	  
	  <article class="clear">
	  <iframe width="460" height="330" src="https://www.youtube.com/embed/DbXPI5-KlEA" frameborder="0" allowfullscreen></iframe>
	  </article>

        <article class="clear">
            <figcaption>
              <h2>Top 10 fights for 2018</h2>
              
             <b><br>1. Anthony Joshua vs Deontay Wilder</br></b>

              <p>Two of the biggest men, the biggest personalities and the biggest punchers in the sport. Joshua is a major star. In the UK he can fill a stadium against anyone. Wilder, who is unorthodox and dangerous, would be a worthy foe and this would be the heavyweight world title unification battle.</p>
              
            <b><br>2. Tyson Fury vs Joseph Parker</br></b>

              <p>Really we want to see Tyson Fury against anyone. Getting licensed and back in the ring is his target for the new year. The key for him will be to recover his health and fitness. But Joseph Parker is not only a world champion, for the time being, he also has beaten Tyson’s cousin Hughie. Tyson could come back with a vengeance (and build himself up to take on the new kingpin of the heavyweight division later on).</p>
              
              <b><br>3. George Groves vs Chris Eubank Jnr</br></b>

              <p>We are getting this one (lucky all of us). February 17 in Manchester is the date. Britain’s two best super-middleweights meeting close enough to the peak of their powers. Action is guaranteed.</p>
              
            <b><br>4. Gennady Golovkin vs Canelo Alvarez</b></br>

            <p>This rematch is likely to happen. But it is the fight to make. They are the best middleweights in the world, their first fight was an excellent contest, tainted by a controversial draw. They should settle that once and for all.</p>

            <b><br>5. Keith Thurman vs Errol Spence</b></br>

             <p>Keith Thurman, a unified world champion at welterweight, has been missed. He hasn’t fought for almost a year. Taking on fellow American Errol Spence would produce the best fighter at welterweight and a new US star.</p>

            <b><br>6. Vasyl Lomachenko vs Jorge Linares</b></br>

             <p>Lomachenko might just be the best boxer on the planet. He’d prove that if he stepped up to lightweight to take on Linares.</p>

            <b><br>7. Oleksandr Usyk vs Murat Gassiev</b></br>

            <p>The World Boxing Super Series is set to produce the supreme cruiserweight on the planet. Usyk-Gassiev would be a tremendous final.</p>

        <b><br>8. Sergey Kovalev vs Dmitry Bivol</b></br>

         <p>Kovalev was humbled by Andre Ward. He might not yet be ready to relinquish his place at the top. But Bivol, a quality puncher, looks dangerous and this would be a thrilling light-heavy unification for the WBO and WBA belts.</p>

        <b><br>9. Artur Beterbiev vs Adonis Stevenson</b></br>

        <p>Russia’s Beterbiev could be a monster at light-heavyweight. For too long Stevenson has taken soft challenges. He must face real opposition in 2018.</p>

        <b><br>10. Manny Pacquiao vs Amir Khan</b></br>

        <p>Both are far from their peak, Pacquiao suffered a shock defeat to Jeff Horn in 2017, Khan hasn’t not fought for well over a year. But the fight would offer them a chance to recapture the glories of old.</p>


            </figcaption>
          </figure>
        </article>
      </section>
    </div>
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
