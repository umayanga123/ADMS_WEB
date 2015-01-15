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

            $query = "SELECT ID,username, password,'guser' AS type FROM g_user WHERE username = '$username' AND password = '$password' UNION
                        SELECT ID,username, password,'suser' AS type FROM s_user WHERE username = '$username' AND password = '$password' UNION
                        SELECT ID,username, password,'admin' AS type FROM admin WHERE username = '$username' AND password = '$password'";

            $result = mysql_query($query);

            while ($row = mysql_fetch_array($result)) {
                $id = $row["ID"];
                $name = $row["username"];
                $type = $row["type"];
            }

            if (mysql_affected_rows() == 0) {
                return ("invalidlogin");
            } else {
                $_SESSION["username"] = $name;

                if ($type == "admin") {
                    $_SESSION["adminname"] = $name;
                    $_SESSION["username"] = "admin";
                    $_SESSION['userid'] = 0;
                    return ("adminlogin");
                } else if ($type == "guser") {
                    $_SESSION['userid'] = $id;
                    return ("guserlogin");
                } else if ($type == "suser") {
                    $_SESSION["adminname"] = NULL;
                    $_SESSION['userid'] = $id;
                    return ("suserlogin");
                }
            }
        }
    }

}
