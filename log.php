<?php

print_r($_POST);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");
session_start();

$u=$_POST["username"];
$p=$_POST["password"];

$que="SELECT * FROM user_table WHERE username='$u'";

$obj=mysqli_query($con,$que);

if (mysqli_num_rows($obj)==1) 
{
	$data=mysqli_fetch_assoc($obj);
	if ($data["password"]==$p)

		
	{
		$_SESSION["name"]=$data["username"];
		$_SESSION["id"]=$data["id"];
		$_SESSION["user_logged_in"] =true;


		header('location:event_page.php');
		exit();
	}
	

	else
	{
		$_SESSION['password-msg']="Invalid password!";
		header('location:login.php');

	}
}
else 
{
	$_SESSION['username-msg']="Invalid Username!";
	header('location:login.php');

}




header('location:login.php');





?>