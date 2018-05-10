<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("zaiddin.co.uk.mysql","zaiddin_co_uk_register","Zaid1234","zaiddin_co_uk_register");
$db= new mysqli("zaiddin.co.uk.mysql","zaiddin_co_uk_register","Zaid1234","zaiddin_co_uk_register") or die('could not connect to database'); // mysqli
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>