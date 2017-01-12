<?php
class LoginModel {

	public function __construct()
	{
		echo "Model Instantiated";
	}

	public function check_user($username, $password)
	{
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
	}

	public function add_user($username, $password)
	{
		if($con->connect_error){
			echo 'could not connect to database';
		}else{
			$result = mysqli_query($con, "insert into users (username, password) values ('$username', '$password');");
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($result){
				echo "Signup successful!!! Welcome ". $row['username'];
			}else{
				echo 'empty query results';
			}
			
		}
	}

}