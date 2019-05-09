<?php


$servername = "localhost";
$username = "root";
$password = "ferazi";
$db = "ferazi_store";

// Create  Connection:

//$link = mysqli_connect("localhost","root", "ferazi");
//mysqli_select_db($link, "shopping_cart_am");

$con = mysqli_connect($servername, $username, $password,$db);
mysqli_select_db($con, "ferazi_store");
// Check Connection
//if (!$con){
//	die("Connection failed: " . mysqli_connect_error());
//} else{
//	print("it is working");
//}

?>