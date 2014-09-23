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

//put your code here
    function __construct() {
        //$host = "localhost"; //your database host name
        //$username = "root"; //your database user name
        //$password = ""; //your database password
        //$dbname = "adms";
        
        $host = "mysql7.000webhost.com"; //your database host name
        $username = "a2696819_root"; //your database user name
        $password = "umayanga123"; //your database password
        $dbname = "a2696819_mysite";

       
        $non = mysql_connect($host, $username, $password) or die("Can't connect to server");
        mysql_select_db($dbname) or die("can't connect to database");
    }

}

$dbConnection = new DBConnectionController();



