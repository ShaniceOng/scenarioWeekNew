<?php

class LoginView {
	public $model;
	public $controller;

	public function __construct($controller, $model)
	{
		$this->controller = $controller;
		$this->model = $model;
	}

	public function output()
	{
		$html = '<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<h1><?=$heading?></h1>
		<form action="process.php" method="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="username" />
			</p>
			<p>
				<label>Password:</label>
				<input type="password" id="pass" name="password" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
		</form>
</body>
</html>';
		return $html;
	}
}
?>