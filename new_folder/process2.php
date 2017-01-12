<?php include 'connection.php'; ?>
<?php
	session_start();
	$username = $_SESSION['username'];
	$result = mysqli_query($con, "select * from profiles where username = '$username'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$username = $row['username'];
	$password = $row['password'];
	$icon_url = $row['icon_url'];
	$homepage_url = $row['homepage_url'];
	$profile_color = $row['profile_color'];
	$private_snippet = $row['private_snippet'];

	if($_POST){
		$new_username = $_POST['username'];
		$password = $_POST['password'];
		$icon_url = $_POST['iconurl'];
		$homepage_url = $_POST['homepageurl'];
		$profile_color = $_POST['profilecolor'];
		$private_snippet = $_POST['privatesnippet'];

		if($con->connect_error){
			echo 'could not connect to database';
		}else{
			mysqli_query($con, "update profiles set username = '$new_username', password = '$password', icon_url = '$icon_url', homepage_url = '$homepage_url', profile_color = '$profile_color', private_snippet = '$private_snippet' where username='$username'");
			$result = mysqli_query($con, "select * from users where username = '$username' and password = '$password' and password = '$password'");
			if ($result) echo 'updated';
			else echo 'not updated';
		}

	}else{
		echo "invalid post params";
	}
?>