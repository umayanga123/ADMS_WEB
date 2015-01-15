<?php

include '../Controller/SendDiseaseController.php';
session_start();

class SendDiseaseModel {

    private $success = "null";
    private $vusername = "null";
    private $p_name = "null";
    private $disease_type = "null";
    private $w_condition = "null";
    private $s_condition = "null";
    private $district = "null";
    private $reigon = "null";
    private $found_date = "null";
    private $discrip = "null";

    function __construct($vusername, $p_name, $disease_type, $w_condition, $s_condition, $district, $reigon, $found_date, $discrip) {

        $this->vusername = $_SESSION["username"];
        $this->p_name = $p_name;
        $this->disease_type = $disease_type;
        $this->w_condition = $w_condition;
        $this->s_condition = $s_condition;
        $this->district = $district;
        $this->reigon = $reigon;
        $this->found_date = $found_date;
        $this->discrip = $discrip;
    }

    /* getter methods */

    public function getVusername() {
        return $this->vusername;
    }

    public function getp_name() {
        return $this->p_name;
    }

    public function getdisease_type() {
        return $this->disease_type;
    }

    public function getw_condition() {
        return $this->w_condition;
    }

    public function gets_condition() {
        return $this->s_condition;
    }

    public function getdistrict() {
        return $this->district;
    }

    public function getreigon() {
        return $this->reigon;
    }

    public function getfound_date() {
        return $this->found_date;
    }

    public function getdiscrip() {
        return $this->discrip;
    }

    /* setter methods */

    public function setVusername($vusername) {
        $this->vusername = $vusername;
    }

    public function setp_name($p_name) {
        $this->p_name = $p_name;
    }

    public function setdisease_type($disease_type) {
        $this->disease_type = $disease_type;
    }

    public function setw_condition($w_condition) {
        $this->w_condition = $w_condition;
    }

    public function sets_condition($s_condition) {
        $this->s_condition = $s_condition;
    }

    public function setdistrict($district) {
        $this->district = $district;
    }

    public function setreigon($reigon) {
        $this->reigon = $reigon;
    }

    public function setfound_date($found_date) {
        $this->found_date = $found_date;
    }

    public function setdiscrip($discrip) {
        $this->discrip = $discrip;
    }

}

if (!empty($_POST)) {
    $year = $_POST["element_7_3"];
    $month = $_POST["element_7_1"];
    $day = $_POST["element_7_2"];
    $full_date = $year . $month . $day;

    $sendDmodel = new SendDiseaseModel($_SESSION["username"], $_POST["element_1"], $_POST["element_2"], $_POST["element_3"], $_POST["element_4"], $_POST["element_5"], $_POST["element_6"], $full_date, $_POST["element_8"]);

    $sendDcontrol = new SendDiseaseController();

    $send_disease = $sendDcontrol->send_disease($sendDmodel);
    header("Location:../View/SUser/send I.php");
}

    