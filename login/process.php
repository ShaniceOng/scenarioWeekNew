<?php
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];

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
					echo "Login successful!!! Welcome ". $row['username'];
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