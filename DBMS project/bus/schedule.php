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

<?php
 include'connection.php';
 session_start();
// $conn=opencon();
 //echo "Connected Successfully";
 

	  
	  
	  $enquiry_from=$_SESSION['$enquiry_from'];
	  $enquiry_dest=$_SESSION['$enquiry_dest'];
	  $enquiry_date=$_SESSION['$enquiry_date'];
	  
  
  echo $enquiry_date;
  
 $quer= "SELECT * from route_details WHERE Froms='$enquiry_from' AND Destination='$enquiry_dest' AND Date='$enquiry_date'";
 
 $result= mysqli_query($conn,$quer);
 
 

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo"<table class ='table'>";
	
    while($row=mysqli_fetch_array($result)){
  ?>
  
 
 <table style='border-color:white'width='800'align='center'> 
 <tr> <td>Route Name</td> 
 <td>Arrival</td> 
 <td>Departure</td>
 <td>From</td> <td>Destination</td>
 <td>Date</td> <td>Fare</td> 
 </tr>

    <tr> <td> <?php echo $row['Route_name']; ?> </td>
         <td> <?php echo $row['Arrival']; ?> </td>
          <td> <?php echo $row['Departure']?> </td>
		  <td> <?php echo $row['Froms'] ?> </td>
		  <td> <?php echo $row['Destination']?> </td>
		  <td> <?php echo $row['Date']?> </td>
		  <td> <?php echo $row['Fare'] ?> </td> 
  </tr>
  </table>
  <br>
	<?php
	}
	}
    ?> 

	 </html>