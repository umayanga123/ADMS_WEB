<?php

require("config.inc.php");



if (!empty($_POST)) {

    try {
        $query = "INSERT INTO plant_images ( deasese_ID ) VALUES (:deasese_ID) ";

        $query_params = array(
            ':deasese_ID' => $_POST['deases_id']
        );

        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (Exception $ex) {
        $response["success"] = 0;
        $response["message"] = "Database failier" . $ex;
    }

    $response["success"] = 1;
    $response["message"] = "Successfully Added Detail!";
}


if (isset($_FILES['myFile'])) {

    $sql = "SELECT desease_ID  FROM plant_desease_detail order by desease_ID DESC  LIMIT 1 ";
    $results = $db->query($sql);
    $row = $results->fetch();
    if ($row) {
        $dirPath = "uploads/" . $row["desease_ID"];
    }



    if (!is_dir($dirPath)) {
        mkdir($dirPath, 0755);
        move_uploaded_file($_FILES['myFile'] ['tmp_name'], $dirPath . "/" . $_FILES['myFile']['name']);
    } else {
        move_uploaded_file($_FILES ['myFile'] ['tmp_name'], $dirPath . "/" . $_FILES['myFile']['name']);
    }
  
    echo 'successful';
}
?>