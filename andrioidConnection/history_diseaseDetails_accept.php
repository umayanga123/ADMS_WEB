<?php

require("config.inc.php");

if (!empty($_POST)) {

   
    $query = "SELECT * FROM plant_desease_detail WHERE type='confirm' AND user_name=:username order by 'desease_ID' desc Limit 10";

    $query_params = array(
        ':username' => $_POST['username']
    );



    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        $response["success"] = 0;
        $response["message"] = "Database Error. Please Try Again!";
        die(json_encode($response));
    }


    $rows = $stmt->fetchAll();

    //check the source is not empty
    if ($rows) {
        $response["success"] = 1;
        $response["message"] = "Post Available!";
        $response["desease_detail"] = array();

        foreach ($rows as $row) {
            // temporary array to create single category
            $tmp = array();

            $tmp["desease_ID"] = $row["desease_ID"];
            $tmp["plant_name"] = $row["plant_name"];
            $tmp["desease_type"] = $row["desease_type"];
            $tmp["date"] = $row["date"];
            


            // push category to final json array
            // echo $tem["id"];
            array_push($response["desease_detail"], $tmp);
        }

        // keeping response header to json
        //header('Content-Type: application/json');
        // echoing json result
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "No Post Available!";
        die(json_encode($response));
    }
}


