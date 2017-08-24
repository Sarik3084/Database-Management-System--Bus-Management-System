 <?php
 include'connection.php';
 //$conn=opencon();
 //echo "Connected Successfully";
 ?>
<html>
<head>
<meta charset="utf-8">
<title>Payment Details</title>

<div class="all">
 <link rel="stylesheet" type="text/css" href="main.css"/>

<body>
<div class="maintitle">
 <h1> Royal Bus Transportations pvt.ltd </h1>
  
 <h5> <marquee> For guarenteed booking and a smooth journey </marquee></h5>
  </div> 


<h2 id="rf">Payment</h2>

<?php 
$query= "SELECT Fare FROM payment_details";
$result= mysql_query($query);
?>

<div class="rform">
 <form action="thankyou.php" method="post">
<div class="rrform">
  Name: <br>
  <input type="text" name="cardname"><br>
  Email: <br>
   <input type="email"name="email"> <br>
 </div>
  Mode of Payment:<br> <br>
  <input type="radio" name="Mode" value="Cash">Cash<br>
  <input type="radio" name="Mode" value="Debit">Debit Card<br>
  <input type="radio" name="Mode" value="Credit">Credit Card<br>
<input type="radio" name="Mode" value="Paytm">Paytm<br><br>
<div class="submit1">
  <input type="Submit" name="submit" value="Pay">
 </div>
</form> 
</body>
 </div>
 </html>
<?php
if (isset($_POST['submit'])) {
 $payment_name= @$_POST['cardname'];
 $payment_fare= @$_POST['fare'];
 $payment_mode= @$_POST['Mode'];
 
  $sql= "INSERT INTO payment_details(Name,Fare,Mode) VALUES ('$payment_name','$payment_fare','$payment_name')";
   mysqli_query($conn,$sql);
}	   
   	    ?>

