<?php
include '../Controller/UserSignupController.php';
session_start();


class GUserSignupModel {

    //put your code here

    private $vusername="null";
    private $vpassword="null";
    private $vcpassword="null";

    function __construct($vusername,$vpassword,$vcpassword) {
        $this->vusername = $vusername;
        $this->vpassword = $vpassword;
        $this->vcpassword= $vcpassword;
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
if(!empty($_POST)){

    if ($_POST["password"] != $_POST["cpassword"]) {
        echo "<font color='red'>Password and confirmation doesn't match.</font>";
        exit;
    } else {
        $guserSignupModel = new GUserSignupModel($_POST["username"],$_POST["password"], $_POST["cpassword"]);
        $userSignupController = new UserSignupController();
        $add_guser = $userSignupController->add_guser($guserSignupModel);
		header("Location:../View/GUser/GUserHome.php");
		
        
    }
}
?>