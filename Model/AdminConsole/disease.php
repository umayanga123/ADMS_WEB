<?php

session_start();
include_once("../../Controller/DBConnection/DBConnectionController.php");

class getDiseaseDetails {

    public function confirmDisease() {

         // Create connection
         $dbConn = new DBConnectionController();
         $conn = $dbConn->getConnetion();

        if (isset($_POST["confirm"])) {

            if (!empty($_POST['enable'])) {

                $desease_id = $_POST['enable'];
                $N = count($desease_id);
                for ($i = 0; $i < $N; $i++) {
                    $query = "UPDATE plant_desease_detail SET type='confirm'  where desease_ID='$desease_id[$i]'";
                    $result = mysqli_query($conn,$query)or die(mysql_error());

                    //newllly add for forum page
                   /*$getdeseasedetai_query = "Select * from  plant_desease_detail where desease_ID='$desease_id[$i]'";
                    $details = mysql_query($getdeseasedetai_query) or die(mysql_error());
                    while ($row = mysql_fetch_array($details)) {
                        $name = "plant name : " . $row["plant_name"] . "  Desease Type :" . $row["desease_type"] . "\n " . " Date : " . $row["date"];
                        $discription = "District : " . $row["district"] . "\n" . "Region : " . $row["region"] . "\n" . "Weather Condition : " . $row["weather_condition"] . "\n" . " Soil Condition " . $row["soil_condition"] . "\n" . " User Commnet : " . $row["user_comment"] ;
                        $image_id = $row["desease_ID"];
                        $result1 = mysql_query('insert into categories (id,desease_ID, name, description, position) select ifnull(max(id), 0)+1,"' . $image_id . '" ,"' . $name . '", "' . $discription . '", count(id)+1 from categories');
                        if (!$result1) {
                            $error = mysql_error();
                            echo $error;
                            exit;
                        }
                    }*/
                }
              
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/DiseaseDetails.php" />';
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/DiseaseHistory.php" />';
            }
        }

        if (isset($_POST["ignore"])) {

            if (!empty($_POST['enable'])) {

                $desease_id = $_POST['enable'];
                $N = count($desease_id);
                for ($i = 0; $i < $N; $i++) {
                    $query = "DELETE FROM plant_desease_detail WHERE desease_ID='$desease_id[$i]'";
                    $result = mysql_query($conn,$query)or die(mysql_error());
                }

                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/DiseaseDetails.php" />';
                echo '<meta http-equiv="refresh" content="1; URL=../../View/AdminConsole/DiseaseHistory.php" />';
            }
        }
    }

}

$object1 = new getDiseaseDetails();
$object1->confirmDisease();


