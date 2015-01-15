<?php

include '../../Controller/AdminConsole/SignupController.php';
session_start();

class SignupModel {

    //put your code here

    private $vusername = "null";
    private $vpassword = "null";
    private $vcpassword = "null";

    function __construct($vusername, $vpassword, $vcpassword) {
        $this->vusername = $vusername;
        $this->vpassword = $vpassword;
        $this->vcpassword = $vcpassword;
    }

    public function getVusername() {
        return $this->vusername;
    }

    public function getVpassword() {
        return $this->vpassword;
    }

    public function getVcpassword() {
        return $this->vcpassword;
    }

    public function setVusername($vusername) {
        $this->vusername = $vusername;
    }

    public function setVpassword($vpassword) {
        $this->vpassword = $vpassword;
    }

    public function setVcpassword($vcpassword) {
        $this->vcpassword = $vcpassword;
    }

}

//calling controller insert user

if (!empty($_POST)) { {
        $signupModel = new SignupModel($_POST["username"], $_POST["password"], $_POST["cpassword"]);
        $_SESSION["username"] = $_POST["username"];
        $signupController = new SignupController();
        $add_admin = $signupController->add_admin($signupModel);
        header("Location:../../View/AdminConsole/Signup.php");		
    }
}



