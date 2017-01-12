<?php include 'process2.php'; ?>
<?php
	echo 'included!';
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
		<form action="process2.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="username" value="<?= $username ?>" />
			</p>
			<p>
				<label>Password:</label>
				<input type="text" id="pw" name="password" value="<?= $password ?>" />
			</p>
			<p>
				<label>Icon_url:</label>
				<input type="text" id="icon" name="iconurl" value="<?= $icon_url ?>" />
			</p>
			<p>
				<label>Homepage URL:</label>
				<input type="text" id="homepage" name="homepageurl" value="<?= $homepage_url ?>" />
			</p>
			<p>
				<label>Profile Color:</label>
				<input type="text" id="color" name="profilecolor" value="<?= $profile_color ?>" />
			</p>
			<p>
				<label>Private Snippet:</label>
				<input type="text" id="snippet" name="privatesnippet" value="<?= $private_snippet ?>" />
			</p>
			<p>
				<input type="submit" id="btn" value="submit" />
			</p>
		</form>
</body>