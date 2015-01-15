<?php

include("../Controller/DBConnection/DBConnectionController.php");

class SendDiseaseController {

    private $success = "";
    private $vusername = "";
    private $p_name = "";
    private $disease_type = "";
    private $w_condition = "";
    private $s_condition = "";
    private $district = "";
    private $reigon = "";
    private $found_date = "";
    private $discrip = "";

    public function send_disease(SendDiseaseModel $disease) {
        if (!empty($_POST)) {

            $vusername = $disease->getVusername();
            $p_name = $disease->getp_name();
            $disease_type = $disease->getdisease_type();
            $w_condition = $disease->getw_condition();
            $s_condition = $disease->gets_condition();
            $district = $disease->getdistrict();
            $reigon = $disease->getreigon();
            $found_date = $disease->getfound_date();
            $discrip = $disease->getdiscrip();


            $query1 = "INSERT INTO plant_desease_detail(plant_name, desease_type, district, region, weather_condition,"
                    . " soil_condition, date, user_comment,user_name)"
                    . " VALUES('$p_name','$disease_type','$district','$reigon','$w_condition','$s_condition',"
                    . "'$found_date','$discrip','$_SESSION[username]')";

            $result1 = mysql_query($query1);

            if (!$result1) {
                $error = mysql_error();
                echo $error;
                exit;
            }
            header("location: http://localhost/ADMS/View/SUser/send I.php");
        }
    }

}
