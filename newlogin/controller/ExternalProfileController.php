<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	session_start();
	$username = $_SESSION['username'];
	$userid = $_SESSION['userid'];
	$status = $_SESSION['status'];
	require ('../model/UserModel.php');
	$model = new UserModel();
	require ('../model/SnippetModel.php');
	$model3 = new SnippetModel();
	// $snippets = $model->show_my_snippets($userid);

	
?>