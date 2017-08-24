<?php
	include'connection.php';
	//$conn=opencon();
	//echo "Connected Successfully";
?>
 
<html>
<div class="all">

<head>
 <link rel="stylesheet" type="text/css" href="main.css"/>
  </head>

<body>
<div class="maintitle">
 <h1> Royal Bus Transportations pvt.ltd </h1>
  
 <h5> <marquee> For guarenteed booking and a smooth journey </marquee></h5>
  </div> 
  
<div class= "bus">  
<a href="booking.php">
<img src="bus1.png" id="hbus" width="690">
</a>
</div>

<div class="mainmenu">
<nav>
 <ul> 
	<li> <a href= "index.php"> Home | </a></li>
	<li> <a href= "about.php"> About Us| </a></li>
	<li>  <a href="ContactUs.php">Contact Us</a></li>
 </ul>
</nav>
</div>

 <h4 id="reser">Click on the bus for reservation! </h4>

 <nav1>
 <ul1>
<li><a href="Travel.php" id="te">Travel Enquiry|</a></li>
<li> <a href="cancelbooking.php" id="te">Cancel Booking| </a> </li>
<li><a href="Login.php" id="te">Employee Login|</a></li>
<li><a href= "status.php"id="te"> Booking Status </a> </li>
</ul1>
</nav1>
  

 </body>
</div>
</html>

<?php


 