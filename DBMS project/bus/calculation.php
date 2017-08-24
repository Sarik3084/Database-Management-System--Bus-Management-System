
<?php
include'connection.php';
 //$conn=opencon();
 //echo "Connected Successfully";
 
  if(mysqli_num_rows($result)=60){
	   header(location: full.php);
  }
  else{
	   header(location: schedule.php);
    }
	?>
  
     