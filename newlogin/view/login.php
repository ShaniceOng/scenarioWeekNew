<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="css/bootstr4p.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<script> 
$(function(){
  $("#headerIn").load("headerIn.php"); 
  $("#headerOut").load("headerOut.html");
  $("#footer").load("footer.html"); 
});
</script> 
</head>
<body>
	
	<?php 
if (isset($_SESSION['username'])) { ?> 
	<div id="headerIn"></div> <?php
	} else { ?>
	    
	    <div id="headerOut"></div> <?php
	} 
	?>


<div class="container"style="font-family: 'Quicksand', sans-serif;">
    <div class="span3 well" style="padding-left: 70px;padding-right: 70px">
    <center><h1>Log In</h1></center>

    <br>
    <form class="form-horizontal" action="../controller/LoginController.php" method="POST">
  <fieldset>
  <div style="padding-left: 200px;padding-right: 250px">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      	<input class="form-control" type="text" id="user" name="username" />
      </div></div>
    </div>
     <div style="padding-left: 200px;padding-right: 250px">
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" type="password" id="pass" name="password" />
        
      </div>
    </div></div>

<?php 
		if( isset($_SESSION['error']) )
		{
	        echo $_SESSION['error'];
	        unset($_SESSION['error']);
		}
		?>
    <div class="form-group">
      <center>
      	<input type="submit" class="btn btn-primary" id="btn" value="login" />
    </center>
    </div>
  </fieldset>
</form>

  </div>
</div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<div id="footer"></div>
</body>
</html>