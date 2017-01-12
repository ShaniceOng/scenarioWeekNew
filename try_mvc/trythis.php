<?php include 'LoginModel.php' ?>

<?php

echo "STARTING";
$model = new LoginModel();
echo "1";

include 'LoginController1.php';
$controller = new LoginController1($model);

include 'LoginView.php';
$view = new LoginView($controller, $model);

echo $view->render(login.php);

if ($con->connect_error)
{
	echo 'COULD NOT CONNECT';
}
else
{
	echo 'COULD CONNECT';
}

?>