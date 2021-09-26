<?php

session_start();



?>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	
    
	<body>
		<div class="container ">
		<div id="header">
  <div class="row">
    <div class="col text-dark p-3 "><h3>Events</h3></div>
    <div class="col p-3"><input type="text" value="search"></h4></div>
    <div class="col"><a href="login.php" role="button" class="btn btn-inline-primary active"><h6>Login</h6><a href="signin.php" role="button" class="btn btn-inline-primary"><h6>Register</h6></a></div>
    </div>
  </div>
  <div class="newcontent">

<a href="home.php" id="anch" class="previous round">&#8249;</a>
  
		<form action="log.php" method="post">
		<h2 class="text-center m-5">Login</h2>
			<div class="form-group">
			<input type="text" class="form-control text-center" name="username" placeholder="Username"
			value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
				
			</div>
			<div class="form-group">
				<table><tr class="error_tr">
		<td></td>
		<td>
		<?php
		if(isset($_SESSION['username-msg']))
		{
			echo $_SESSION['username-msg'];
			unset($_SESSION['username-msg']);
		}	?>
		</td></tr></table>
		
			</div>
			<div class="form-group">
				<input type="password" name="password"class="form-control text-center" placeholder="Password"
				value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
			</div>

				<div class="form-group">
				<table><tr class="error_tr">
		<td></td>
		<td>
	<?php
		if(isset($_SESSION['password-msg']))
		{
			echo $_SESSION['password-msg'];
			unset($_SESSION['password-msg']);
		}	?>
		</td></tr></table>
		
			</div>

			<div class="form-group">
				<center><input type="submit" class="btn btn-primary" value="login"></center>
			</div>
			</form>
			</div>
			
		</div>
	</body>
</html>