<?php

class LoginView {
	public $model;
	public $controller;

	public function __construct($controller, $model)
	{
		$this->controller = $controller;
		$this->model = $model;
	}

	public function render($filename)
	{
		echo 'requiring';
		require($filename);
	}
}
?>