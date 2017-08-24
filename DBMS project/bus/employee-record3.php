<?php
include'connection.php';
 //$conn=opencon();
 //echo "Connected Successfully";
 include'employeepage3.php'
 ?>
 
<html>


<body>
<div class="uform">
 <form method="post" action="">
  <div class="uuform">
  Employee Name:<input type="text" name="name"><br>
  Level: <input type="number" name="level"><br>
  Username: <input type="text" name="username"> <br><br>
  Password: <input type="text" name="password"> <br><br>
  <input type="submit" name="submit"value="Cancel">
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
   $record_password= @$_POST['password'];
   
  $sql= "INSERT INTO employee(E_name, Level, Username, Password) VALUES ('$record_name','$record_level','$record_username','$record_password')";
   mysqli_query($conn,$sql);
}
   ?>
   