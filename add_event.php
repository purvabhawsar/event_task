<html>
<head><title>add event</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
	



	<script type="text/javascript">
		
		$(document).ready(function(){
			$("#submit").click(function(){
				
				var a=$("#name").val();
				var b=$("#image").val();
				var c=$("#description").val();
			
				


			var check=true;

			if (a=="") {
				$("#name_msg").html("Enter event name ");
				check = false;
			}
			else{
				$("#name_msg").html("");
			}
			if (b=="") {
				$("#img_msg").html("select image");
				check = false;
			}
			else
			{
				$("#img_msg").html('');
			}

			if (c=="") {
				$("#description_msg").html("enter description ");
				check = false;
			}
			else
			{
				$("description_msg").html("");
			}

	
		return check;
	});
});	

</script>


</head>
<body>
	<div class="container">
	<div id="header">
  <div class="row">
    <div class="col text-dark p-3 "><h3>Events</h3></div>
    <div class="col p-3"><input type="text" value="search"></h4></div>
    <div class="col"><a href="login.php" role="button" class="btn btn-inline-primary active"><h6>Login</h6><a href="signin.php" role="button" class="btn btn-inline-primary active"><h6>Register</h6></a></div>
    </div>
  </div>
  <div class="signincontent">
		<h3 class="text-center m-3">ADD EVENT</h3>
		<form class="form-horizontal" action="event.php" method="post" enctype="multipart/form-data">

		<div class="form-group">
	<input type="textarea" name="name" class="form-control" placeholder="Enter your Event Name" id="name" />
	
</div>
<div class="form-group">
	<table><tr class="error_msg">
		<td></td>
		<td id="name_msg"></td>
	</tr>
</table>
</div>

			<div class="form-group">
				<input type="file" name="image"  id="image" />
			</div>
			<div class="form-group">
				<table><tr class="error_msg">
					<td></td>
					<td id="img_msg"></td>
				</tr>
			</table>
		</div>


		<div class="form-group">

			<textarea placeholder="description" id="description" name="description"></textarea>
			
			
		</div>
		<div class="form-group">
			<table><tr class="error_msg">
				<td></td>
				<td id="description_msg"></td>
			</tr>
		</table>
	</div>
	

	



<div class="form-group">
	<center><input type="submit" name="" id="submit" value="Submit" class="btn btn-success" id="submit" role="button"></center>
</div>
</form>

</div>
</div>
</body>
</html>