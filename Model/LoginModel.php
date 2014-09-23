<?php

include("../Controller/DBConnection/DBConnectionController.php");
session_start();

class LoginModel {

    public function getLogin() {
        $name = "";
        $type = "";
       
        if (isset($_POST["submit"]) && $_POST["submit"] == "submit") {

            $username = $_POST["username"];
            $password = $_POST["password"];

            $query = "SELECT username, password,'guser' AS type FROM g_user WHERE username = '$username' AND password = '$password' UNION
                        SELECT username, password,'suser' AS type FROM s_user WHERE username = '$username' AND password = '$password'";
            
            $result = mysql_query($query); 
            
            while ($row = mysql_fetch_array($result)) {
                $name = $row["0"];
                $type = $row["type"];
            }

            if (mysql_affected_rows() == 0) {
               return ("invalidlogin");   
            } else {
                $_SESSION["username"] = $name;
                if ($name == "admin") {
                    $_SESSION["adminname"] = $name;
                    return ("adminlogin");
					
                }else if($type == "guser"){
                    return ("guserlogin");
					
                }else if($type == "suser"){
                    return ("suserlogin");
					
                }
            }
        }
    }

}
?>
