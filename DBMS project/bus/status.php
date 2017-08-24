<html>
<head>
<meta charset="utf-8">
<title>About Us</title>

<div class="all">
 <link rel="stylesheet" type="text/css" href="main.css"/>

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
</body>
   <div class="eform">
 <form action="" method='post'>
     Ticket No:<br>
  <input type="text" name="ticketno" ><br>
  <div class="submit">
 <input type="submit" name="submit" value="Submit">
 </div>
 </div>
 </form>
 
 <?php
session_start();
if(isset($_POST['submit']))
{
 $status_ticket= $_POST['ticketno'];
  //echo $status_ticket;      	  
	 $_SESSION['$status_ticket']=$status_ticket;
    
   
   $sql="SELECT * FROM booking_details where Ticket_no='$status_ticket'";
  $result= mysqli_query($conn,$sql);
  //$count= mysqli_num_rows($result);
     	// if($count=="60"){
	   
	   //header('Location: full.php');
	// } 
	
	echo "<script>window.open('status1.php','_self')</script>";
}  
 ?>