<?php
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$icon_url = "";
		$homepage_url = "";
		$profile_color = "black";
		$private_snippet = "";

		$user = 'root';
		$pass = 'root';
		$db = 'website';
		$host = 'localhost';

		$con = mysqli_connect($host, $user, $pass, $db);

		if($con->connect_error){
			echo 'could not connect to database';
		}else{
			$result = mysqli_query($con, "select * from users where username = '$username' and password = '$password'");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($result){
				if ($row['username'] == $username && $row['password'] == $password) {
					//echo "Login successful!!! Welcome ". $row['username'];
					$count=mysqli_num_rows($result);

					if ($count==1)
					{
						// echo 'count is 1';
						session_start();
						$_SESSION['loggedin'] = true;
						$_SESSION['username'] = $username;
						$addProfile = mysqli_query($con, "insert into profiles (username, password, icon_url, homepage_url, profile_color, private_snippet) values ('$username', '$password', '$icon_url', '$homepage_url', '$profile_color', '$private_snippet');");
						//echo '<script>window.location.href = "process2.php";</script>';
    					//die();
    					header('Location:profile.php');
    					
					}
					
				} else {
					echo "Failed to login!";
				}
			}else{
				echo 'empty query results';
			}
			
		}

	}else{
		echo "invalid post params";
	}

?>