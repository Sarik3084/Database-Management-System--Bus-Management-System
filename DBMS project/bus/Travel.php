<?php
include'connection.php';
// $conn=opencon();
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
 <div class="others">  
<a href="booking.php" >
<img src="bus1.png" width="500" height="200">
</a>
</div>

<div class="others1">
<nav>
 <ul> 
 <li> <a href= "index.php"> Home | </a></li>
 <li> <a href= "about.php"> About Us | </a></li>
 <li>  <a href="ContactUs.php">Contact Us</a></li>
  </ul>
</nav>
</div>

<h2 class="rf">Travel Enquiry</h2><br><br>
<div class="uform">
 <form action="" method="post">
  <div class="uuform">
  
  From: <input type="text" name="from" id="from">
  Destination: <input type="text" name="dest" id="dest"> <br><br>

 
Gender: <br> <br>
     <input type="radio" name="gender" value="male" checked>Male<br>
     <input type="radio" name="gender" value="female">Female<br>
     <input type="radio" name="gender" value="other" value="other">Other<br> <br>


 Journey Date: <br><br>
 <select name="date" id="date">
 <option value="01">01</option> <option value="02">02</option> <option value="03">03</option> <option value="04">04</option> <option value="05">05</option>
 <option value="06">06</option> <option value="07">07</option> <option value="08">08</option> <option value="09">09</option> <option value="10">10</option>
<option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option>
<option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option>
<option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option>
<option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option>
<option value="31">31</option>
 </select>
<select name="month" id="date">
 <option value="Jan">Jan </option> <option value="Feb">Feb </option> <option value="Mar">Mar </option> <option value="Apr">Apr </option> 
 <option value="May">May </option> <option value="Jun">Jun </option> <option value="Jul">Jul </option> <option value="Aug">Aug </option>
<option value="Sep">Sep </option> <option value="Oct">Oct </option> <option value="Nov">Nov </option> <option value="Dec">Dec </option>
 </select> <br> <br>
 <select name="year" id="date">
 <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option>
 </select>
 <div class="submit">
 <input type="submit" name="check" value="Check Status">
</div>
</div>
 </form>
</div>

<?php
session_start();
if(isset($_POST['check']))
{
 $enquiry_from= @$_POST['from'];
 $enquiry_dest= @$_POST['dest'];
 $enquiry_gender= @$_POST['gender'];
 $enquiry_day= @$_POST['date'];
 $enquiry_month= @$_POST['month'];
 $enquiry_year= @$_POST['year'];
 
  if($enquiry_month=='Jan'){$a=01;} else if($enquiry_month=='Feb'){$a=02;} else if($enquiry_month=='Mar'){$a=03;} else if($enquiry_month=='Apr'){$a=04;} 
 else if($enquiry_month=='May'){$a=05;} else if($enquiry_month=='Jun'){$a=06;} else if($enquiry_month=='Jul'){$a=07;} else if($enquiry_month=='Aug'){$a=08;}
  else if($enquiry_month=='Sep'){$a=09;} if($enquiry_month=='Oct'){$a=10;} else if($enquiry_month=='Nov'){$a=11;} else if($enquiry_month=='Dec'){$a=12;}
  
  
 $enquiry_date= date("$enquiry_year-$a-$enquiry_day");
 
      	  
	 $_SESSION['$enquiry_from']="$enquiry_from";
     $_SESSION['$enquiry_dest']="$enquiry_dest";
     $_SESSION['$enquiry_date']="$enquiry_date";	 
 
 //echo $enquiry_from;
  //echo $enquiry_dest;
  //$a=date('2016-01-04');
  //echo $a;
  //echo $enquiry_date;
  
  // $sql="SELECT * FROM booking_details where Froms='$enquiry_from' AND Destination='$enquiry_dest'";
  //$result= mysqli_query($conn,$sql);
  //$count= mysqli_num_rows($result);
     	// if($count=="60"){
	   
	   //header('Location: full.php');
	// } 
	
	echo "<script>window.open('schedule.php','_self')</script>";
}  
 ?>