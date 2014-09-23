<?php

include_once("../Model/SUserSignupModel.php");
include("../Controller/DBConnection/DBConnectionController.php");


class SUserSignupController {

//put your code here
        private $success = "";
        private $vusername = "";
        private $vpassword = "";
        private $vfullname ="";
        private $vdepname = "";
        private $depid = "";
        private $contactno = "";
        private $email = "";
        private $address = "";
        
    public function add_suser(SUserSignupModel $suser) {
      
        if (!empty($_POST)) {

            $vusername = $suser->getVusername();
            $vpassword = $suser->getVpassword();
            $vfullname = $suser->getVfullname();
            $vdepname = $suser->getVdepname();
            $vdepid = $suser->getVdepid();
            $vcontactno = $suser->getVcontactno();
            $vemail = $suser->getVemail();
            $vaddress = $suser->getVaddress();
         
            $query = "SELECT username,'true' AS success FROM g_user WHERE username = '$vusername' UNION
                        SELECT username,'true' AS success FROM s_user WHERE username = '$vusername'";
            
            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $success = $row["success"];
            }
       
            if ($success == "true") {
                echo "use anothername"; 
               
            } else {
                $query1 = "INSERT INTO s_user(username,password,fullname,depname,depid,contactno,email,address)"
                    . " VALUES('$vusername','$vpassword','$vfullname','$vdepname','$vdepid','$vcontactno','$vemail','$vaddress')";
                $result1 = mysql_query($query1);
                  
                if (!$result1) {
                    $error = mysql_error();
                    echo $error;
                    exit;
                }
                header("location: http://localhost/Test_ADMS/View/GUser/GUserHome.php");
                
            }
            
        }
    }

}

