<?php

include_once("../Model/SUserSignupModel.php");
include("../Controller/DBConnection/DBConnectionController.php");

class SUserSignupController {

//put your code here
    private $success = "";
    private $vusername = "";
    private $vpassword = "";
    private $vfullname = "";
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
                        SELECT username,'true' AS success FROM s_user WHERE username = '$vusername'UNION
                        SELECT username,'true' AS success FROM admin WHERE username = '$vusername' ";


            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $success = $row["success"];
            }

            //echo "spec" . $success;
            if ($success === 'true') {

                echo '</script>';
                echo "<script>alert('Username already taken please try diffrent name');
                        window.location.href='../View/SUserSignupView.php';
                        </script>";


//                echo "<font color='red'>Username already taken please try diffrent name<br></font>";
//                echo "<font color='#000000'> Our suggestion for user name</font><br>";
//                echo "1:- ";
//                echo $_SESSION["username"];
//                echo "<font color='#000000'>_a</font>";
//                echo "<br>2:- ";
//                echo $_SESSION["username"];
//                echo "<font color='#000000'>_abc</font>";
//                echo "<br>3:- ";
//                echo $_SESSION["username"];
//                echo "<font color='#000000'>15</font>";
//                echo "<br>4:- ";
//                echo $_SESSION["username"];
//                echo "<font color='#000000'>27</font>";
//                echo "<br>5:- ";
//                echo $_SESSION["username"];
//                echo "<font color='#000000'>56</font>";
//                echo "<br>6:- ";
//                echo $_SESSION["username"];
//                echo "<font color='#000000'>45</font>";
                exit;
            } else {
                $query1 = "INSERT INTO s_user(username,password,fullname,depname,depid,contactno,email,address)"
                        . " VALUES('$vusername','$vpassword','$vfullname','$vdepname','$vdepid','$vcontactno','$vemail','$vaddress')";
                $result1 = mysql_query($query1);

                if (!$result1) {
                    $error = mysql_error();
                    echo $error;
                    exit;
                }
               
            }
        }
    }

}
