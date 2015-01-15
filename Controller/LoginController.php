<?php

include_once("../Model/LoginModel.php");

class LoginController {

    public $model;

    public function __construct() {
        $this->model = new LoginModel();
    }

    public function invoke() {


        $result = $this->model->getLogin();

        if ($result == 'invalidlogin') {
            echo "<script type=\"text/javascript\">alert (\"Wrong username or password.Please try again.\");window.location.href='../View/LoginView.php';</script> ";
        } else if ($result == 'adminlogin') {
            header("location: ../View/AdminConsole/Requests.php");
        } else if ($result == 'guserlogin') {
            header("location:../View/GUser/GUserHome.php");
        } else if ($result == 'suserlogin') {
            header("location:../View/SUser/SUserHome.php");
        }
    }

}

$object1 = new LoginController();
$object1->invoke();


