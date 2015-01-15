<?php

include '../Controller/advertisementController.php';
session_start();

class advertisementModel {

    //put your code here
    private $vstatues = "null";
    private $vc_food = "null";
    private $vc_agriculture = "null";
    private $va_description = "null";
    private $vprice = "null";
    private $vcustomer = "null";

    function __construct($vstatues, $vc_food, $vc_agriculture, $va_description, $vprice, $vcustomer) {
        $this->vstatues = $vstatues;
        $this->vc_food = $vc_food;
        $this->vc_agriculture = $vc_agriculture;
        $this->va_description = $va_description;
        $this->vprice = $vprice;
        $this->vcustomer = $vcustomer;
    }

    /* getter methods */

    public function getVstatues() {
        return $this->vstatues;
    }

    public function getVc_food() {
        return $this->vc_food;
    }

    public function getVc_agriculture() {
        return $this->vc_agriculture;
    }

    public function getVa_description() {
        return $this->va_description;
    }

    public function getVprice() {
        return $this->vprice;
    }

    public function getVcustomer() {
        return $this->vcustomer;
    }

    /* setter methods */

    public function setVstatues($vstatues) {
        $this->vstatues = $vstatues;
    }

    public function setVc_food($vc_food) {
        $this->vc_food = $vc_food;
    }

    public function setVc_agriculture($vc_agriculture) {
        $this->Vc_agriculture = $vc_agriculture;
    }

    public function setVa_description($va_description) {
        $this->va_description = $va_description;
    }

    public function setVprice($vprice) {
        $this->vprice = $vprice;
    }

    public function setVcustomer($vcustomer) {
        $this->vcustomer = $vcustomer;
    }

}

//calling controller insert user
if (!empty($_POST)) {
    
    
    if ($_POST["food"] === NULL) {
        $_POST["food"] = "NULL";
    }
    if ($_POST["Agriculture"] === NULL) {
        $_POST["Agriculture"] = "NULL";
    }
    //echo $_POST["looking"], $_POST["food"], $_POST["Agriculture"], $_POST["a_description"], $_POST["price"], $_SESSION["username"];
    $advertisementModel = new advertisementModel($_POST["looking"],$_POST["food"], $_POST["Agriculture"], $_POST["a_description"], $_POST["price"],$_SESSION["username"]);
    $advertisementController = new advertisementController();
    $add_advertisement = $advertisementController ->add_advertisement($advertisementModel);
    
   
    
    
     header("Location:../View/SUser/AdvertiseView.php");
}





