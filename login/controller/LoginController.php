<?php

class LoginController {
	// include("model/Database.php");
 public $model;
 // public $heading = "Our heading";
 // include("view/login.php");
 public function __construct($model)  
    {  
    	echo "IN CONTROLLER";
        $this->model = $model;
        echo "Controller instantiated";
    } 

    public createNewUser($username, $password)
    {
    	model.add_user($username, $password);
    }
 
 // public function invoke()
 // {
  
 //  $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
 //  if($reslt == 'login')
 //  {
 //   include 'view/Afterlogin.php';
 //  }
 //  else
 //  {
 //   include 'view/login.php';
 //  }
  
 // }
}
?>