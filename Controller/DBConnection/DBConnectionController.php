<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnectionController
 *
 * @author user
 */
class DBConnectionController {

   private $con;
   
   function getConnetion()
   {
    $host = "localhost"; //your database host name
    $username = "root"; //your database user name
    $password = ""; //your database password
    $dbname = "adms";


//        $username = "a2696819_root";
//        $password = "umayanga123";
//        $host = "mysql7.000webhost.com";
//        $dbname = "a2696819_mysite";

    // Create connection
    $con = new mysqli($host, $username, $password,$dbname);

    // Check connection
    if ($con->connect_error) {
         die("Connection failed: " . $con->connect_error);
    }
    
     return $con;
   }  
}

$dbConnection = new DBConnectionController();


?>
