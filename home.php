<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"test");
session_start();

$que="SELECT * FROM event_table WHERE id IN(1,2,3)";
$obj=mysqli_query($con,$que);
//$data=mysqli_fetch_assoc($obj);


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
    <div id="content"><img src="1.jpg"height="400px" width="100%"></div>
    <div id="footer" >
      
      <table class="table m-5">
        
        <?php
        
          # code...
        
        
        while($data=mysqli_fetch_assoc($obj))
          {?>

        <tr>
          
          

          
          
          <td><img src="<?php echo $data['image'];?>" height="120px" width="300px">
          </td>
          <td><b><?php echo $data['event_name'];?></b>
            <br><br>
            <?php echo $data['description'];
            

            ?>
          </td>
          
          
          
          

        </tr>


        
        <?php
        
      }
      

      ?>




      
      

    </table>

    
    <a href="login.php" role="button" class="btn btn-light">More Event</a>


  </div>           
</div>

</body>
</html>
