<?php session_start(); ?>  

<!DOCTYPE html>
<html>
<head>
	<title>Create a new snippet!</title>
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
	  $("#footer").load("footer.html"); 
	});
	</script> 
</head>
<body>
	<div id="headerIn"></div>

	<div class="well" style="padding-left: 70px; padding-right:70px">
	<form action="../controller/NewSnippetController.php" method="POST">
		<h3>New Snippet</h3>
		<textarea rows="8" cols="40" type="text" name="newSnippet" id="newSnippet">
		</textarea><br>
		<input class="btn btn-primary" type="submit" id="btn" value="submit" />
	</form>
</div>
	<!-- <p>Create a new snippet!</p>
	<div id="frm">
		<form action="../controller/NewSnippetController.php" method="POST">
			<input type="text" name="newSnippet" id="newSnippet"/>
			<input type="submit" id="btn" value="submit" />
		</form>
	</div> -->
	<div id="footer"></div>
</body>