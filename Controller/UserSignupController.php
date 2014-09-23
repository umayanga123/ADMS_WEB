<?php

include_once("../Model/GUserSignupModel.php");
include("../Controller/DBConnection/DBConnectionController.php");


class UserSignupController {

//put your code here
        private $success = "";
        private $vusername = "";
        private $vpassword = "";
        
    public function add_guser(GUserSignupModel $guser) {
      
        if (!empty($_POST)) {

            $vusername = $guser->getVusername();
            $vpassword = $guser->getVpassword();
         
            $query = "SELECT username,'true' AS success FROM g_user WHERE username = '$vusername' UNION
                        SELECT username,'true' AS success FROM s_user WHERE username = '$vusername'";
            
            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $success = $row["success"];
            }
       
            if ($success == "true") {
                echo "use anothername"; 
               
            } else {
                $query1 = "INSERT INTO g_user(username,password)VALUES('$vusername','$vpassword')";
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

