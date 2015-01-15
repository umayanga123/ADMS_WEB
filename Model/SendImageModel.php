<?php


require("../androidConnection/config.inc.php");

$allowedExts = array("jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo '<script language="javascript">';
        echo 'alert("Return Code: " . $_FILES["file"]["error"] )';
        echo '</script>';
        //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        echo '<script language="javascript">';
        echo 'alert("Sent Successfully!")';
        //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        //echo "Type: " . $_FILES["file"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
        //header("Location:../View/SUser/send D.php");
        echo '</script>';
        $sql = "SELECT desease_ID  FROM plant_desease_detail order by desease_ID DESC  LIMIT 1 ";
        $results = $db->query($sql);
        $row = $results->fetch();
        if ($row) {
            $dirPath = "../androidConnection/uploads/" . $row["desease_ID"];
        }

        if (!is_dir($dirPath)) {
            mkdir($dirPath, 0755);
            move_uploaded_file($_FILES['file'] ['tmp_name'], $dirPath . "/" . $_FILES['file']['name']);
        } else {
            move_uploaded_file($_FILES ['file'] ['tmp_name'], $dirPath . "/" . $_FILES['file']['name']);
        }

        echo '<script language="JavaScript"> window.location.href ="../View/SUser/send I.php" </script>';
    }
} else {

    echo '<script language="javascript">';
    echo 'alert("Invalid file!")';
    echo '</script>';
    echo '<script language="JavaScript"> window.location.href ="../View/SUser/send I.php" </script>';

}

