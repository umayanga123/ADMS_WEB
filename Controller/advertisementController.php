<?php

include_once("../Model/advertisementModel.php");
include_once("../Controller/DBConnection/DBConnectionController.php");

class advertisementController {

//put your code here
    private $vstatues = "";
    private $vc_food = "";
    private $vc_agriculture = "";
    private $va_description = "";
    private $vprice = "";
    private $customer = "";

    public function add_advertisement(advertisementModel $addvertise) {

        if (!empty($_POST)) {

            $vstatues = $addvertise->getVstatues();
            $vc_food = $addvertise->getVc_food();
            $vc_agriculture = $addvertise->getVc_agriculture();
            $va_description = $addvertise->getVa_description();
            $vprice = $addvertise->getVprice();
            $customer = $addvertise->getVcustomer();



            // Create connection
           $dbConn = new DBConnectionController();
           $conn = $dbConn->getConnetion();

            $query1 = "INSERT INTO advertisement(statues,c_food,c_agriculture,a_description,price,customer) VALUES('$vstatues','$vc_food','$vc_agriculture','$va_description','$vprice','$customer')";

            $result1 = mysqli_query($conn,$query1);

            if (!$result1) {
                $error = mysqli_error();
                echo $error;
                exit;
            } else {
//                echo "<script>alert('send details successfully');
//                        window.location.href='../View/SUser/AdvertiseView.php';
//                        </script>";
//                exit;
            }
        }
    }

}
