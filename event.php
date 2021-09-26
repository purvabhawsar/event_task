<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");

$a=$_POST["name"];

$c=$_POST["description"];


$name=$_FILES['image']['name'];
 $tmp_name=$_FILES['image']['tmp_name'];
 $size=$_FILES['image']['size'];
 $new_name=rand(10000, 100000);
 $new_name=$new_name. time();
// //echo "$new_name";
 $arr=explode(".", $name);
 $ext=end($arr);
 $new_name=$new_name.".".$ext;

move_uploaded_file($tmp_name, $new_name);



$que="INSERT INTO event_table(event_name,image,description)VALUES('$a','$new_name','$c')";
mysqli_query($con,$que);
header("location:event_page.php");
?>