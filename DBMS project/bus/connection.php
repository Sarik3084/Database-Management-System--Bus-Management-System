<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$db="busdb";

$conn = new mysqli($servername, $username, $password,$db);

 if($conn->connect_error){
 die("Connection failed: %s \n" . $conn->connect_error);
 }
return $conn;



?>

