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


</html>


<?php
 include'connection.php';
 $conn=opencon();
 echo "Connected Successfully";
 include 'employeepage.php'
 
 $quer= "SELECT * from route_details";
 $result= mysqli_query($conn,$quer);
 echo "<table>";
 
  //echo "On the date %s". [$Date];
   while(mysqli_fetch_assoc($result)){
  echo "<tr> <td>" .@$row[$Route_name]. "<tr><td>" .@$row[$Arrival]. "<tr><td>" .@$row[$Departure]. "<tr> <td>" .@$row[$Froms]. "<tr><td>" .@$row[$Destination]. "<tr> <td>" .@$row[$Fare]; 
 
 $sql= sprintf("SELECT Route_name, Arrival, Departure, From, Destination, Fare FROM route_detail where from=\"%s\" AND destination=\"%s\" AND date=\"%s\";",$enquiry_from,$enquiry_destination,$enquiry_date);
  
  }
  echo "</table>";
 
  ?>
   