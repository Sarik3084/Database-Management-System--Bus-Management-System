<?php
include'connection.php';
 //$conn=opencon();
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
 

 <div class="eform">
 <h2 id="etl"> Employee Login </h2>
  
<form method="post">
 Username: <input type="text" name="eusername"> <br> <br>
 Password: <input type="password" name="epassword"> <br> <br>
 <div class="subm">
 <input type="submit" name="submit" value="Submit">
</div>
 </form>
 </div>
 </body>
</div>
</html>

<?php
if(isset($_POST['submit'])){
 $login_ename= $_POST['eusername'];
 $login_password= $_POST['epassword'];
 
 //$login_ename=mysql_real_escape_string[$login_ename];
 //$login_password=mysql_real_escape_string[$login_password);
 
$sql= "SELECT * from employee WHERE Username='$login_ename' AND Password='$login_password'";
 $result= mysqli_query($conn,$sql);
 //$lev= mysqli_fetch_field_direct($result1,0);
 
 $row=mysqli_fetch_array($result);
 $lev=$row['Level'];
 
 //echo $lev."HEY";
 
 if($lev==1){
	 header('Location: emp-level-1.php');
 }
	 
	 else if($lev==2){
	 header('Location: emp-level-2.php');
	 }

    else if($lev==3){
	 header('Location: emp-level-3.php');	
       }	 
 
}
   ?>
