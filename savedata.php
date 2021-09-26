<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");

$a=$_POST["username"];
$b=$_POST["password"];
$c=$_POST["cpassword"];
$d=$_POST["name"];
$e=$_POST["city"];


$que="INSERT INTO user_table(username,password,confirm_password,name,city)VALUES('$a','$b','$c','$d','$e')";
mysqli_query($con,$que);
header("location:login.php");
?>