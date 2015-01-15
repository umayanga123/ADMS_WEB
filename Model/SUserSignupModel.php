<?php

include '../Controller/SUserSignupController.php';
session_start();

class SUserSignupModel {

    //put your code here
    private $vusername = "null";
    private $vpassword = "null";
    private $vcpassword = "null";
    private $vfullname = "null";
    private $vdepname = "null";
    private $vdepid = "null";
    private $vcontactno = "null";
    private $vemail = "null";
    private $vaddress = "null";

    function __construct($vusername, $vpassword, $vcpassword, $vfullname, $vdepname, $vdepid, $vcontactno, $vemail, $vaddress) {
        $this->vusername = $vusername;
        $this->vpassword = $vpassword;
        $this->vcpassword = $vcpassword;
        $this->vfullname = $vfullname;
        $this->vdepname = $vdepname;
        $this->vdepid = $vdepid;
        $this->vcontactno = $vcontactno;
        $this->vemail = $vemail;
        $this->vaddress = $vaddress;
    }

    /* getter methods */

    public function getVusername() {
        return $this->vusername;
    }

    public function getVpassword() {
        return $this->vpassword;
    }

    public function getVcpassword() {
        return $this->vcpassword;
    }

    public function getVfullname() {
        return $this->vfullname;
    }

    public function getVdepname() {
        return $this->vdepname;
    }

    public function getVdepid() {
        return $this->vdepid;
    }

    public function getVcontactno() {
        return $this->vcontactno;
    }

    public function getVemail() {
        return $this->vemail;
    }

    public function getVaddress() {
        return $this->vaddress;
    }

    /* setter methods */

    public function setVusername($vusername) {
        $this->vusername = $vusername;
    }

    public function setVpassword($vpassword) {
        $this->vpassword = $vpassword;
    }

    public function setVcpassword($vcpassword) {
        $this->vcpassword = $vcpassword;
    }

    public function setVfullname($vfullname) {
        $this->vfullname = $vfullname;
    }

    public function setVdepname($vdepname) {
        $this->vdepname = $vdepname;
    }

    public function setVdepid($vdepid) {
        $this->vdepid = $vdepid;
    }

    public function setVcontactno($vcontactno) {
        $this->vcontactno = $vcontactno;
    }

    public function setVemail($vemail) {
        $this->vemail = $vemail;
    }

    public function setVaddress($vaddress) {
        $this->vaddress = $vaddress;
    }

}

//calling controller insert user
if (!empty($_POST)) {


    if ($_POST["password"] != $_POST["cpassword"]) {
        echo "<font color='red'>Password and confirmation doesn't match.</font>";
        exit;
    } else {
        $suserSignupModel = new SUserSignupModel($_POST["username"], $_POST["password"], $_POST["cpassword"], $_POST["fullname"], $_POST["depname"], $_POST["depid"], $_POST["contactno"], $_POST["email"], $_POST["address"]);
        $_SESSION["username"] = $_POST["username"];
        $suserSignupController = new SUserSignupController();
        $add_suser = $suserSignupController->add_suser($suserSignupModel);
        header("Location:../View/LoginView.php");
    }
}




