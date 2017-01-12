<?php session_start(); ?>  

<!DOCTYPE html>
<html>
<head>
	<title>HELLO Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="username" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="password" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
		</form>
</body>