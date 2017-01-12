<?php session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
	if($_POST){

	if (!empty($_POST['token'])) {
	    if (hash_equals($_SESSION['token'], $_POST['token'])) {
	         require ('../model/UserModel.php');

			$model = new UserModel();
			$username = $_POST['username'];
			$password = $_POST['password'];

			// $options = [
		 //    	'salt' => $username,
			// ];

			$id = $model->authenticate($username, $password);
			if($id!=-1)
			{
				session_regenerate_id(true);
				// session_start();
				$_SESSION['userid'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['status'] = $model->getStatus($id);
				$_SESSION['IPaddress'] = $_SERVER['REMOTE_ADDR'];
         		$_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
				header('Location:../view/profile.php');
			}
			else
			{
				$_SESSION['error'] = "Invalid username or password";
				header('Location:../view/login.php');
			}
	    } else {
	    	$_SESSION['error'] = "Error occured during form submission!";
			header('Location:../view/login.php');
	    }
	}
		
		
		

	}else{
		echo "invalid post params";
	}

?>