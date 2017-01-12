<?php session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
	if($_POST){
		require ('../model/UserModel.php');

		$model = new UserModel();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$id = $model->authenticate($username, $password);
		if($id!=-1)
		{
			// session_start();
			$_SESSION['userid'] = $id;
			$_SESSION['username'] = $username;
			$_SESSION['status'] = $model->getStatus($id);
			header('Location:../view/profile.php');
		}
		else
		{
			$_SESSION['error'] = "Invalid username or password";
			header('Location:../view/login.php');
		}
		
		

	}else{
		echo "invalid post params";
	}

?>