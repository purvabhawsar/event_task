<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");
$a=$_GET['did'];
$que_event="DELETE FROM event_table WHERE id=$a";
mysqli_query($con,$que_event);
header('location:event_page.php');
?>
