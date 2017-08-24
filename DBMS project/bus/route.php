<?php
include'connection.php';
 $conn=opencon();
 //echo "Connected Successfully";
 ?>
 
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>

<div class="all">
 <link rel="stylesheet" type="text/css" href="main.css"/>



<div class="maintitle">
 <h1> Royal Bus Transportations pvt.ltd </h1>
  
 <h5> <marquee> For guarenteed booking and a smooth journey </marquee></h5>
  </div> 
</head>
<a href="booking.php">
<img src="bus1.png" id="hbus">
</a>

<nav>
 <ul> 
 <li> <a href= "index.php"> Home | </a></li>
 <li> <a href= "about.php"> About Us | </a></li>
 <li>  <a href= "ContactUs.php">Contact Us</a></li>
  </ul>
</nav>

<body>
<a href="admin.jpg">
<img src="admin.jpg" id="admin">
</a>
	
<div class="newsportal">
<h3 id="news">News</h3>
 </div>


	<div id="van">
		<ul>
			
			<li><a href="">Book ticket</a></li>
			<li><a href="">Cancel Booking</a></li>
			<li><a href="">Reservation Status</a></li>
			<li><a href="">Schedule Update</a></li>
			<li><a href="">Update Employ Records</a></li>
			<li><a href="">Log Out</a></li>
		</ul>	
	</div>		

<div class="uform">
 <form method="post" action="">
  <div class="uuform">
  Route Name: <input type="text" name="name"><br>
  From: <input type="text" name="from"><br>
  Destination: <input type="text" name="dest"> <br><br>
  Arrival: <input type="time" name="arrival"> <br><br>
  Departure: <input type="time" name="depar"> <br><br>
  Fare: <input type="text" name="fare"> <br><br>
  
 Journey Date: <br><br>
 <select name="date">
 <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>
 <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option>
<option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option>
<option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option>
<option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option>
<option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option>
<option value="31">31</option>
 </select>
<select name="month">
 <option value="Jan">Jan </option> <option value="Feb">Feb </option> <option value="Mar">Mar </option> <option value="Apr">Apr </option> 
 <option value="May">May </option> <option value="Jun">Jun </option> <option value="Jul">Jul </option> <option value="Aug">Aug </option>
<option value="Sep">Sep </option> <option value="Oct">Oct </option> <option value="Nov">Nov </option> <option value="Dec">Dec </option>
 </select> <br> <br>
 <div class="submit">
 <input type="submit" name="submit" value="Book">
</div>
</div>
 </form>
 </div>
 </body>
  </div>
 </html>
 


<?php 
if (isset($_POST['submit'])){
 $route_name= @$_POST['name'];
 $route_arrival= @$_POST['arrival'];
 $route_departure= @$_POST['depar'];
 $route_from= @$_POST['from'];
 $route_destination= @$_POST['dest'];
 $route_fare= @$_POST['fare'];
 $route_date= @$_POST['date'];
 
 $sql= "INSERT INTO route_details(Route_name, Arrival, Departure, Froms, Destination, Fare, Date) VALUES ('$route_name','$route_arrival','$route_departure', '$route_from', '$route_destination','$route_fare','$route_date')";
  mysqli_query($conn,$sql);
}
 ?>


