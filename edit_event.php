
<?php
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");



$a=$_GET['eid'];
$que="SELECT * FROM event_table WHERE id=$a";
$obj=mysqli_query($con,$que);
$data=mysqli_fetch_assoc($obj);

?>
<html>
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
<div class="container">
  <div id="header">
  <div class="row">
    <div class="col text-dark p-3 "><h3>Events</h3></div>
    <div class="col p-3"><input type="text" value="search"></h4></div>
    <div class="col"><a href="login.php" role="button" class="btn btn-inline-primary"><h6>Login</h6><a href="signin.php" role="button" class="btn btn-inline-primary"><h6>Register</h6></a></div>
    </div>
  </div>

<form action="update_event.php" method="post" enctype="multipart/form-data"> 
<input type="hidden" name="eid" value="<?php echo $a;?>">

		
		</div>
		<div class="newcontent">
			
				<table class="table">
				<tr><th>Event name</th>
				<td><input type="text" name="name" value="<?php echo $data["event_name"];?>"></td></tr>
				<tr><th>Description</th>
				<td><input type="text" name="description" value="<?php echo $data["description"];?>"></td></tr>
				
				
				
				
				<tr><td><input type="submit" value="Update-event" role="button" class="btn btn-primary"></td></tr>
				  
			</table></div></div></div>
		</form>
		</body>
		</html>







</a>