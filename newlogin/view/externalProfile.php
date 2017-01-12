<?php require ('../controller/ExternalProfileController.php'); ?>

<?php
	if (isset ($_GET['userid'])){
		//echo "heyyy";
		$notset = false;
		$userid = ($_GET['userid']);
		$snippets = $model3->show_my_snippets($userid);
		$username = $model->getUsername($userid);
		$row = $model->getProfile($username);
		$password = $row['password'];
		$icon_url = $row['icon_url'];
		$homepage_url = $row['homepage_url'];
		$profile_color = $row['profile_color'];
	}
	else {
		$notset = true;
		$snippets = $model3->show_my_snippets($userid);
		$row = $model->getProfile($username);
		$password = $row['password'];
		$icon_url = $row['icon_url'];
		$homepage_url = $row['homepage_url'];
		$profile_color = $row['profile_color'];
	}

	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
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

	<div class="container" style="font-family: 'Quicksand', sans-serif;">

    <div class="well" style="padding-left: 70px; padding-right:70px">
    <h1></h1>
    <center>
      <div class="row">
      	<center>
        <div class="col-md-3"><h3><?php echo $username ?></h3></div>
    </center>
        	<div class="col-md-3">
        <?php 
			$url = "profile.php?username=" . $username; ?>
		<?php if (isset($_SESSION['status']) || $notset)
		{
			if ($_SESSION['status']==2 || $notset)
			{
				?>

        <a href= "<?= $url ?>" class="btn btn-primary">Edit Details</a>
        <?php
			}
		}
		?>
	</div>
</div>
        <img src="<?= $icon_url ?>" width="140" height="140" class="img-circle">
        
</center>

    

<div class="row">

<h3>Homepage URL</h3>

<div class="alert alert-dismissible alert-info">
  <a href="<?= $homepage_url ?>"><?php echo $homepage_url; ?></a>
</div>

<h3>All Snippets</h3>

<?php foreach($snippets as $snippet) { ?>
<div class="alert alert-dismissible alert-info">
	<?php echo $snippet['content']; ?>
</div>
<?php } ?>
</div>
</div>

		<div id="footer"></div>
</body>