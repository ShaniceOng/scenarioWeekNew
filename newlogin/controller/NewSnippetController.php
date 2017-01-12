<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
	if($_POST){
		require ('../model/SnippetModel.php');

		$model = new SnippetModel();
		$username = $_SESSION['username'];
		$snippet= $_POST['newSnippet'];
		$userid = $_SESSION['userid'];
		$model->create_snippet($username, $snippet, $userid);
		header('Location:../view/mysnippets.php');
			// $sql_insert = "insert into snippets (username, content) values ('$username', '$snippet');";
			// $result_insert = mysqli_query($con, $sql_insert);
			// if($result_insert){
			// 	echo 'snippet added';
			// }else{
			// 	echo 'snippet not added';
			// }
			
	}

?>