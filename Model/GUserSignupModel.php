<?php

include '../Controller/UserSignupController.php';
session_start();

class GUserSignupModel {

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

if (!empty($_POST)) { {
        $guserSignupModel = new GUserSignupModel($_POST["username"], $_POST["password"], $_POST["cpassword"]);
        $_SESSION["username"] = $_POST["username"];
        $userSignupController = new UserSignupController();
        $add_guser = $userSignupController->add_guser($guserSignupModel);
        header("Location:../View/LoginView.php");
    }
}


