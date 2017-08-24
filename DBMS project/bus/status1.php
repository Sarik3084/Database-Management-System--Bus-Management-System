<html>
<div class="all">

<head>
 <link rel="stylesheet" type="text/css" href="main.css"/>
  </head>

<div class="maintitle">
 <h1> Royal Bus Transportations pvt.ltd </h1>
  
 <h5> <marquee> For guarenteed booking and a smooth journey </marquee></h5>
  </div>
  </head>
  <br><br><br>
  <body>
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
</html>

<?php
 include'connection.php';
 session_start();
// $conn=opencon();
 //echo "Connected Successfully";
 

	  
	  
	  $status_ticket=@$_SESSION['$status_ticket'];
	  
  //echo $status_ticket;
  
 $quer= "SELECT * from booking_details WHERE Ticket_no='$status_ticket'";
 
 $result= mysqli_query($conn,$quer);
 
 

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo"<table class ='table'>";
	
    while($row=mysqli_fetch_array($result)){
  ?>
  
 <table style='border-color:blue'width='800'align='center'> 
 <tr> <td>Ticket No</td> <td>Name</td><td>From</td> <td>Destination</td> <td>Date</td>   
      <tr> <td> <?php echo $row['Ticket_no']; ?> </td>
         <td> <?php echo $row['Name']; ?> </td>
          <td> <?php echo $row['Froms']?> </td>
		  <td> <?php echo $row['Destination'] ?> </td>
		  <td> <?php echo $row['Date']?> </td>
		   </tr>;
  <br>
	<?php
	}
	}
    ?> 

	 