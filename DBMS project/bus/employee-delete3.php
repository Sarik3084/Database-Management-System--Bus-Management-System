<?php
include'connection.php';
 //$conn=opencon();
 //echo "Connected Successfully";
 include 'employeepage3.php';
  ?>
 
 
 <html>

<body>
<div class="uform">
 <form method="post" action="">
  <div class="uuform">
  Employee Name:<input type="text" name="name"><br>
  Level: <input type="number" name="level"><br>
  Username: <input type="text" name="username"> <br><br>
   <input type="submit" name="submit" value="Update">
   </div>
    </form>
   </div>
   </body>
   </div>
 </html>

<?php
if (isset($_POST['submit'])){
  $cancel_username= @$_POST['username'];
  $cancel_level= @$_POST['level'];
  //$cancel_name= @$_POST['dest'];
  //$cancel_ticket= $_POST['ticketno'];
  //$cancel_payment=  @$_POST['payid'];
  
  $sql= "DELETE FROM employee WHERE Username='$cancel_username' AND Level= '$cancel_level'";
  mysqli_query($conn,$sql);
}
?>  
   