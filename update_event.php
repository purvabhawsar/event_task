<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");
session_start();

$a=$_POST["name"];
$b=$_POST["description"];




$x=$_POST["eid"];
$que="UPDATE event_table SET event_name='$a', description='$b' WHERE id=$x";
mysqli_query($con,$que);
header('location:event_page.php');






?>