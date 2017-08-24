 <?php
  include'connection.php';
  $conn=opencon();
  echo "Connection Successful";
  include'employeepage.php'
  ?>
  
  
 <html>
<body>

<div class="uform">
 <form method="post" action="payment.php">
  <div class="uuform">
  Name: <input type="text" name="name"><br>
  From: <input type="text" name="from"><br>
  Destination: <input type="text" name="dest"> <br><br>

 
Gender: <br> <br>
     <input type="radio" name="gender" value="male" checked>Male<br>
     <input type="radio" name="gender" value="female">Female<br>
     <input type="radio" name="gender" value="other">Other<br> <br>


 Journey Date: <br><br>
 <select name="date">
 <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>
 <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option>
<option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option>
<option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option>
<option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option>
<option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option>
<option value="31">31</option>
 </select>
<select name="date">
 <option value="Jan">Jan </option> <option value="Feb">Feb </option> <option value="Mar">Mar </option> <option value="Apr">Apr </option> 
 <option value="May">May </option> <option value="Jun">Jun </option> <option value="Jul">Jul </option> <option value="Aug">Aug </option>
<option value="Sep">Sep </option> <option value="Oct">Oct </option> <option value="Nov">Nov </option> <option value="Dec">Dec </option>
 </select> <br> <br>
 <select name="date" id="date">
 <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option>
 </select>
 <div class="submit">
 <input type="submit" name="submit" value="Book">
</div>
</div>
 </form>
 </div>
 </body>
 
 </html>
 <?php 
  if (isset($_POST['submit'])){
  $book_name= @$_POST['name'];
  $book_from= @$_POST['from'];
  $book_dest= @$_POST['dest'];
  $book_gender= @$_POST['gender'];
  $book_date=  @$_POST['date'];
  
   
   //echo "$book_name";
  $sql="INSERT INTO booking_details(Name,Froms,Destination,Date)VALUES('$book_name','$book_from','$book_dest','$book_date')";
   mysqli_query($conn,$sql);
   
   
    $sql= sprintf("SELECT * FROM booking_details where Froms=\"%s\" AND Destination=\"%s\" AND 'Date'=\"%s\";",$book_from,$book_dest,$book_date);
  $result= mysqli_query($conn,$sql);
  $count= mysqli_num_rows($result);
     	 
	 if($count=="60"){
	   
	   header('Location: full.php');
	 }
  }
  ?>

