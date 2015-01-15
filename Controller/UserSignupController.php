<?php

include_once("../Model/GUserSignupModel.php");
include("../Controller/DBConnection/DBConnectionController.php");

class UserSignupController {


    var $success = "";
    var $vusername = "";
    var $vpassword = "";

    public function add_guser(GUserSignupModel $guser) {

        if (!empty($_POST)) {

            $vusername = $guser->getVusername();
            $vpassword = $guser->getVpassword();


            $query = "SELECT username,'true' AS success FROM g_user WHERE username = '$vusername' UNION
                        SELECT username,'true' AS success FROM s_user WHERE username = '$vusername'UNION
                        SELECT username,'true' AS success FROM admin WHERE username = '$vusername' ";


            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $success = $row["success"];
            }
            //echo $success;
            if ($success === 'true') {


//                echo '<script language="javascript"  >';
//                echo 'alert("Username already taken please try diffrent name")';
//                echo 'window.location.href='admin/ahm/panel'';
                echo '</script>';
                echo "<script>alert('Username already taken please try diffrent name');
                        window.location.href='../View/GUserSignupView.php';
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

                //header("Location:../View/GUserSignupView.php");
            } else {
                $query1 = "INSERT INTO g_user(username,password)VALUES('$vusername','$vpassword')";
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
