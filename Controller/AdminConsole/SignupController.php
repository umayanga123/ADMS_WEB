<?php

include_once("../../Model/AdminConsole/SignupModel.php");
include_once("../../Controller/DBConnection/DBConnectionController.php");

class SignupController {

    public function add_admin(SignupModel $admin) {
        $success = "";
        $vusername = "";
        $vpassword = "";

        if (!empty($_POST)) {

            $vusername = $admin->getVusername();
            $vpassword = $admin->getVpassword();

            $query = "SELECT username,'true' AS success FROM g_user WHERE username = '$vusername' UNION
                        SELECT username,'true' AS success FROM s_user WHERE username = '$vusername'UNION
                        SELECT username,'true' AS success FROM admin WHERE username = '$vusername' ";

           // Create connection
           $dbConn = new DBConnectionController();
           $conn = $dbConn->getConnetion();
            
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)) {
                $success = $row["success"];
            }

            if ($success == "true") {


                echo '</script>';
                echo "<script>alert('Username already taken please try diffrent name');
                        window.location.href='../../View/AdminConsole/Signup.php';
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
                $query1 = "INSERT INTO admin(username,password)VALUES('$vusername','$vpassword')";
                $result1 = mysqli_query($conn,$query1);

                if (!$result1) {
                    $error = mysqli_error();
                    echo $error;
                    exit;
                }

                echo "<script>alert('Add admin successfully');
                        window.location.href='../../View/AdminConsole/Signup.php';
                        </script>";
                exit;
            }
        }
    }

}
