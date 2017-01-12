<?php 
require ('../controller/HeaderController.php');
$username = $_SESSION['username'];
 ?>



<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="font-family: 'Quicksand', sans-serif;">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="#">Header In</a>
    </div>
    <ul class="nav navbar-nav">
    <li>
      <a class="navbar-brand" href="homepage.php">Home</a>
    </li>
    <li>
      <a class="navbar-brand" href="externalProfile.php">Profile</a>
    </li>
    
    <?php if ($status!=1) { ?>
    <li>
      <a class="navbar-brand" href="newsnippet.php">New Snippet</a>
    </li>
    <?php } ?>
    <li>
      <a class="navbar-brand" href="mysnippets.php">My Snippets</a>
    </li>
    <li>
    <form action="../controller/HeaderController.php" method="POST">
		<input type="submit" name="action" id="btn" value="logout" />
	</form>
</li>
</ul>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      
    </div>
  </div>
</nav>