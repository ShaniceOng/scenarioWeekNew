<?php include 'connection.php'; ?>
<?php
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($con->connect_error){
			echo 'could not connect to database';
		}else{
			$sql = "insert into users (username, password) values ('$username', '$password');";
			$result = mysqli_query($con, $sql);
			if($result){
				echo 'user added';
			}else{
				echo 'user not added';
			}
			
		}

	}else{
		echo "invalid post params";
	}

?>