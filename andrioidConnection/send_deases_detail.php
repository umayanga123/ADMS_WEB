<?php

require("config.inc.php");

//if posted data is not empty
if (!empty($_POST)) {

    $query = "INSERT INTO plant_desease_detail(`desease_ID`, `plant_name`, `desease_type`, `district`, `region`, `weather_condition`, `soil_condition`, `date`, `user_comment`, `user_name`) VALUES (NULL, :plantName, :diseaseType, :district, :region,:weather, :soil, :date,:comment, :user)";

    //Again, we need to update our tokens with the actual data:
    $query_params = array(
        ':plantName' => $_POST['plant_name'],
        ':diseaseType' => $_POST['disease_type'],
        ':district' => $_POST['district'],
        ':region' => $_POST['region_name'],
        ':weather' => $_POST['weather'],
        ':soil' => $_POST['soil_condition'],
        ':date' => date('Y-m-d'),
        ':comment' => $_POST['user_discription'],
        ':user' => $_POST['user_name']
    );



    //time to run our query, and create the user
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        $sql = "SELECT desease_ID  FROM plant_desease_detail order by desease_ID DESC  LIMIT 1 ";
        $results = $db->query($sql);
        $row = $results->fetch();
        if ($row) {
            $response["deases_id"] = $row["desease_ID"];
        } else {
            $response["deases_id"] = -1;
        }
    } catch (PDOException $ex) {


        $response["usertype"] = "Special User";
        $response["deases_id"] = -1;
        $response["success"] = 0;
        $response["message"] = "Database Error2. Please Try Again!";
        die(json_encode($response));
    }

    $response["usertype"] = "Special User";

    $response["success"] = 1;
    $response["message"] = "Successfully Added Details!\nClick ImageButton to add images.";
    echo json_encode($response);
}
