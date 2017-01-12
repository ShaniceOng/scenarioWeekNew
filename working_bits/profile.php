<?php include 'process2.php' ?>
<?php
	session_start();
	if (isset($_SESSION['loggedin'])) {
	    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
	    $username = $_SESSION['username'];
	} else {
	    echo "Please log in first to see this page.";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="username" value="<?= $username ?>" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
			<p>
				<label>Password:</label>
				<input type="text" id="user" name="username" value="<?= $password ?>" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
			<p>
				<label>Icon_url:</label>
				<input type="text" id="user" name="icon_url" value="<?= $icon_url ?>" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
		</form>
</body>