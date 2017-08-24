<!DOCTYPE html>
 
<html>
<head>
<meta charset="utf-8">
<title>Reservation</title>

<div class="all">
 <link rel="stylesheet" type="text/css" href="main.css"/>

<body>
<div class="maintitle">
 <h1> Royal Bus Transportations pvt.ltd </h1>
  
 <h5> <marquee> For guarenteed booking and a smooth journey </marquee></h5>
  </div> 
  
  <nav>
 <ul> 
 <li> <a href= "index.php"> Home | </a></li>
 <li> <a href= "about.php"> About Us | </a></li>
 <li>  <a href= "ContactUs.php">Contact Us</a></li>
  </ul>
</nav>


<h2 id="rf">Reservation</h2>
<div class="rform">
 <form action="payment.php">
  First name:<br>
  <input type="text" name="firstname" ><br>
  Last name:<br>
  <input type="text" name="lastname" ><br>
  Age:<br>
  <input type="text" name="age"><br><br>
  Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br><br>
  
Journey Date: <br><br>
 <select name="date" id="date">
 <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option>
 <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option>
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
 <div class="submit">
 <input type="submit" value="Submit">
</div>
</div>
 </form>
</div>
</div>
