<?php
include'connection.php';
 $conn=opencon();
 echo "Connected Successfully";
 include'employeepage.php'
 ?>
 
<html>



<div class="uform">
 <form method="post" action="">
  <div class="uuform">
  Employee Name:<input type="text" name="name"><br>
  Level: <input type="number" name="level"><br>
  Username: <input type="text" name="username"> <br><br>
  <input type="submit" name="submit"value="Update">
   </div>
    </form>
   </div>
   </body>
   </div>
 </html>

<?php
if (isset($_POST['submit'])){
   $record_name= @$_POST['name'];
   $record_level= @$_POST['level'];
   $record_username= @$_POST['username'];
   
   
  $sql= "DELETE FROM employee where E_name=$record_name and Level= $record_level and $record_username= $record_username";
   mysqli_query($conn,$sql);
}
   ?>
   