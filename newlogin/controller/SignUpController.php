<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	if($_POST){
		require ('../model/UserModel.php');
		$model = new UserModel();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$con_password = $_POST['con_password'];

		if ($password===$con_password)
		{
			$id = $model->create_user($username, $password);
			if($id!=-1)
			{
				session_start();
				$_SESSION['userid'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['status'] = $model->getStatus($id);
				header('Location:../view/homepage.php');
			}
			else
			{
				$_SESSION['error'] = "error occured";
				header('Location:../view/signup.php');
			}
		}
		else
		{
			$_SESSION['error'] = "Type passwords again!";
			header('Location:../view/signup.php');
		}
		
		
	}

?>