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

    function __construct() {
        $host = "localhost"; //your database host name
        $username = "root"; //your database user name
        $password = ""; //your database password
        $dbname = "adms";


//        $username = "a2696819_root";
//        $password = "umayanga123";
//        $host = "mysql7.000webhost.com";
//        $dbname = "a2696819_mysite";



        $non = mysql_connect($host, $username, $password) or die("Can't connect to server");
        mysql_select_db($dbname) or die("can't connect to database");
    }

}

$dbConnection = new DBConnectionController();



