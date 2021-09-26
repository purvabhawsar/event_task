<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");
session_start();



$que="SELECT * FROM event_table";
$obj=mysqli_query($con,$que);
//$data=mysqli_fetch_assoc($obj);


?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	
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
  

		<center><h2 class="p-3">Welcome</h2></center><a href="home.php" role="button" class="btn btn-secondary">Home</a> <a href="add_event.php" role="button" class="btn btn-info">Add Event</a>
		<br><br>


				

			<table class="table m-5">
				
				<?php
			
			while($data=mysqli_fetch_assoc($obj))
				{?>
			<tr>
		
			

			
		
				<td><img src="<?php echo $data['image'];?>" height="100px" width="200px">
			</td>
			<td><b><?php echo $data['event_name'];?></b>
			<br><br>
				<?php echo $data['description'];
			?></td>
			<td><a href="edit_event.php?eid=<?php echo $data['id']; ?>" role="button" class="btn btn-secondary">Edit</a></td>
			<td><a href="delete_event.php?did=<?php echo $data['id']; ?>" role="button" class="btn btn-danger">Delete</a></td>
				
			
			
			

			</tr>

			
			<?php
			
		}
		

		?>

				
				

					</table>

		</body>
		</html>