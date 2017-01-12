<?php
$model = new LoginModel();
$controller = new LoginController($model);
$view = new LoginView($controller, $model);

echo $view->output();

?>