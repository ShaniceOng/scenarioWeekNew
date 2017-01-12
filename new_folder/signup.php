<?php session_start(); ?>  

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="SignUpController.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="username" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="password" />
			</p>
			<p>
				<input type="submit" id="btn" value="signup" />
			</p>
		</form>
</body>