<?php
  include'connection.php';
  //$conn=opencon();
  //echo "Connection Successful";
  include 'employeepage3.php';
  ?>
  

<html>
<body>
   <div class="eform">
 <form action="" method='post'>
     Ticket No:<br>
  <input type="text" name="ticketno" ><br>
  <div class="submit">
 <input type="submit" name="submit" value="Submit">
 </div>
 </div>
 </form>
 </body>
 </html>
 
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