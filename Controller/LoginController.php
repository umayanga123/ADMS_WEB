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
            echo "<div align='bottom'><font color=red size=2><b>Wrong username or password.<br>Please try again.</b></font></div>";
        } else if ($result == 'adminlogin') {
           header("location: ../View/Admin/AdminHome.php");
            //require("../View/Admin/AdminHome.php");
        } else if ($result == 'guserlogin') {
            header("location:../View/GUser/GUserHome.php");
            //require("../View/GUser/GUserHome.php");
        }else if ($result == 'suserlogin') {
            header("location:../View/SUser/SUserHome.php");
            //require("../View/SUser/SUserHome.php");
        }
    }

}

$object1 = new LoginController();
$object1->invoke();


