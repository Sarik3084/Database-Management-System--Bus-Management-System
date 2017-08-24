<?php
 include'connection.php';
 //$conn=opencon();
 //echo "Connected Successfully";
 include 'employeepage3.php'
 ?>
<html>
<div class="all">

<head>
 <link rel="stylesheet" type="text/css" href="main.css"/>
  </head>

<body>
<div class="uform">
 <form method="post" action="">
  <div class="uuform">
  Route Name: <input type="text" name="name"><br>
  From: <input type="text" name="from"><br>
  Destination: <input type="text" name="dest"> <br><br>

 
 Journey Date: <br><br>
 <select name="date" id="day">
 <option value="01">01</option> <option value="02">02</option> <option value="03">03</option> <option value="04">04</option> <option value="05">05</option>
 <option value="06">06</option> <option value="07">07</option> <option value="08">08</option> <option value="09">09</option> <option value="10">10</option>
<option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option>
<option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option>
<option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option>
<option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option>
<option value="31">31</option>
 </select>
<select name="month" id="month">
 <option value="Jan">Jan </option> <option value="Feb">Feb </option> <option value="Mar">Mar </option> <option value="Apr">Apr </option> 
 <option value="May">May </option> <option value="Jun">Jun </option> <option value="Jul">Jul </option> <option value="Aug">Aug </option>
<option value="Sep">Sep </option> <option value="Oct">Oct </option> <option value="Nov">Nov </option> <option value="Dec">Dec </option>
 </select> <br> <br>
 <select name="year" id="year">
 <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option>
 </select>

 Arrival:<input type="text"name="arrival" value="HH-MM-SS">
 Departure:<input type="text"name="departure" value="HH-MM-SS">
 
 <div class="submit">
 <input type="submit" name="check" value="Check Status">
</div>
</div>
 </form>
</div>
 </body>
 
 </div>
</html>

<?php
 if (isset($_POST['check'])){
  $book_name= @$_POST['name'];
  $book_from= @$_POST['from'];
  $book_dest= @$_POST['dest'];
   $book_day= @$_POST['date'];
  $book_month= @$_POST['month'];
  $book_year= @$_POST['year'];
  $book_arrival= @$_POST['arrival'];
  $book_departure= @$_POST['departure'];
  
  if($book_month=='Jan'){$a=01;} else if($book_month=='Feb'){$a=02;} else if($book_month=='Mar'){$a=03;} else if($book_month=='Apr'){$a=04;} 
 else if($book_month=='May'){$a=05;} else if($book_month=='Jun'){$a=06;} else if($book_month=='Jul'){$a=07;} else if($book_month=='Aug'){$a=08;}
  else if($book_month=='Sep'){$a=09;} if($book_month=='Oct'){$a=10;} else if($book_month=='Nov'){$a=11;} else if($book_month=='Dec'){$a=12;}
  
  $book_date= date("$book_year-$a-$book_day");
  
  $sql= "INSERT INTO route_details(Route_name, Froms, Destination, Date, Arrival, Departure) VALUES ('$book_name','$book_from','book_dest','book_date', '$book_arrival', '$book_departure')";  
     
  mysqli_query($conn,$sql);
  
 }
   ?>
   