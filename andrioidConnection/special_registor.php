<?php

/*
  Our "config.inc.php" file connects to database every time we include or require
  it within a php script.  Since we want this script to add a new user to our db,
  we will be talking with our database, and therefore,
  let's require the connection to happen:
 */
require("config.inc.php");

//if posted data is not empty
if (!empty($_POST)) {


    $query = " SELECT 1 FROM g_user WHERE username = :user";

    $query_params = array(
        ':user' => $_POST['uname']
    );

    //Now let's make run the query:
    try {
        // These two statements run the query against your database table.
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {

        $response["success"] = 0;
        $response["message"] = "Database Error1. Please Try Again!";
        die(json_encode($response));
    }


    $row = $stmt->fetch();
    //$row1 = $stmt1->fetch();
    if ($row) {
        // For testing, you could use a die and message.
        //die("This username is already in use");
        //You could comment out the above die and use this one:
        $query1 = "DELETE FROM  g_user where username = :user";
        $query_params1 = array(
            ':user' => $_POST['uname']
        );

        try {
            // These two statements run the query against your database table.
            $stmt = $db->prepare($query1);
            $result = $stmt->execute($query_params1);


            $query2 = "INSERT INTO s_user (username,password,fullname,depname,depid,contactno,email,address) VALUES (:username ,:password,:fullname,:depname,:depid,:contact,:email,:address)";

            $query_params2 = array(
                ':username' => $_POST['uname'],
                ':password' => $_POST['password'],
                ':fullname' => $_POST['fname'],
                ':depname' => $_POST['depName'],
                ':depid' => $_POST['depNo'],
                ':contact' => $_POST['contact'],
                ':email' => $_POST['email'],
                ':address' => $_POST['address']
            );

            $stmt2 = $db->prepare($query2);
            $result2 = $stmt2->execute($query_params2);
        } catch (PDOException $ex) {

            $response["success"] = 0;
            $response["message"] = "Database Error2. Please Try Again!" . $ex;
            die(json_encode($response));
        }
    } else {
        
        
        
        $query1 = " SELECT 1 FROM s_user WHERE username = :user";
        //now lets update what :user should be
        $query_params1 = array(
            ':user' => $_POST['uname']
        );

        try {
            // These two statements run the query against your database table.
            $stmt1 = $db->prepare($query1);
            $result1 = $stmt1->execute($query_params1);
        } catch (PDOException $ex) {
            $response["success"] = 0;
            $response["message"] = "Database Error3. Please Try Again!";
            die(json_encode($response));
        }


        $row1 = $stmt1->fetch();
        if ($row1) {
            $response["success"] = 0;
            $response["message"] = "I'm sorry, this username is already in use";
            die(json_encode($response));
        } else {

            try {

                $query2 = "INSERT INTO s_user (username,password,fullname,depname,depid,contactno,email,address) VALUES (:username ,:password,:fullname,:depname,:depid,:contact,:email,:address)";

                $query_params2 = array(
                    ':username' => $_POST['uname'],
                    ':password' => $_POST['password'],
                    ':fullname' => $_POST['fname'],
                    ':depname' => $_POST['depName'],
                    ':depid' => $_POST['depNo'],
                    ':contact' => $_POST['contact'],
                    ':email' => $_POST['email'],
                    ':address' => $_POST['address']
                );

                $stmt2 = $db->prepare($query2);
                $result2 = $stmt2->execute($query_params2);
            } catch (PDOException $ex) {
                $response["success"] = 0;
                $response["message"] = "Database Error4. Please Try Again!" . $ex;
                die(json_encode($response));
            }
        }
    }

    $response["success"] = 1;
    $response["message"] = "Successfully request registration!";
    echo json_encode($response);
}