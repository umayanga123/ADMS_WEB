<?php

//load and connect to MySQL database stuff

require("config.inc.php");

if (!empty($_POST)) {
    //gets user's info based off of a username.
    $query = " SELECT id,username,password FROM g_user WHERE username = :username ";
    $query1 = " SELECT id,username,password,fullname,depname,depid,contactno,email,address,usertype FROM s_user WHERE username = :username ";
    //  $query = " SELECT id,username,password FROM g_user WHERE username = :username ";

    $query_params = array(
        ':username' => $_POST['username']
    );


    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {

        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        //or just use this use this one to product JSON data:
        $response["success"] = 0;
        $response["message"] = "Database Error. Please Try Again!";
        $response["usertype"] = "null";
        die(json_encode($response));
    }

    //This will be the variable to determine whether or not the user's information is correct.
    //we initialize it as false.
    $validated_info = false;

    //fetching all the rows from the query
    $row = $stmt->fetch();


    if ($row) {
        //if we encrypted the password, we would unencrypt it here, but in our case we just
        //compare the two passwords
        if ($_POST['password'] === $row['password']) {
            $login_ok = true;
            $response["usertype"] = "General User";
        } else {
            $login_ok = false;
        }
    } else {
        $stmt = $db->prepare($query1);
        $result = $stmt->execute($query_params);
        $row = $stmt->fetch();
        if ($row) {
            if ($_POST['password'] === $row['password']) {
                $login_ok = true;
                if ($row["usertype"] === "ok") {
                    $response["usertype"] = "Special User";
                } else {
                    $response["usertype"] = "General User";
                }
            } else {
                $login_ok = false;
            }
        }
    }

    // If the user logged in successfully, then we send them to the private members-only page 
    // Otherwise, we display a login failed message and show the login form again 
    if ($login_ok) {
        $response["success"] = 1;
        $response["message"] = "Login successful!";
        die(json_encode($response));
    } else {
        //$login_ok = false;
        $response["success"] = 0;
        $response["message"] = "Invalid Credentials!";
        $response["usertype"] = "null";
        die(json_encode($response));
    }
}
?>