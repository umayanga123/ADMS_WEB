<?php


require("config.inc.php");

//if posted data is not empty
if (!empty($_POST)) {
    
    //$query = "INSERT INTO g_user ( username, password ) VALUES ( :user, :pass ) ";

    $query ="INSERT INTO plant_desease_detail(`desease_ID`, `plant_name`, `desease_type`, `district`, `region`, `weather_condition`, `soil_condition`, `date`, `user_comment`, `user_name`) VALUES (NULL, 'cocounut', 'fvfv', 'ffggb', 'bgbgb', 'bbgbg', 'gbgbgb', '2014-09-09', 'gbgbgbgbbg', 'uma')";
    //Again, we need to update our tokens with the actual data:
    $query_params = array(
        ':user' => $_POST['username'],
        ':pass' => $_POST['password']
    );
    
    //time to run our query, and create the user
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        $sql  = "SELECT desease_ID  FROM plant_desease_detail order by desease_ID DESC  LIMIT 1 "; 
        $results = $db->query($sql);
        $row = $results->fetch();
        if($row){
            $response["deases_id"] =$row["desease_ID"];
        }else{
            $response["deases_id"] =-1;
        }
    } catch (PDOException $ex) {
        // For testing, you could use a die and message.
        //die("Failed to run query: " . $ex->getMessage());
        //or just use this use this one:
        
        $response["usertype"] = "Special User";
        $response["deases_id"] =-1;
        $response["success"] = 0;
        $response["message"] = "Database Error2. Please Try Again!";
        die(json_encode($response));
    }

    $response["usertype"] = "Special User";
    
    $response["success"] = 1;
    $response["message"] = "Successfully Added Detail!";
    echo json_encode($response);

    
}


?>