<?php

session_start();
unset($_SESSION); 
unset($_COOKIE);


session_destroy(); //destroy session
//header('../View/LoginView.php');// redirect to login or index page
if (isset($_SERVER['HTTP_COOKIE']))
{
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie)
    {
        $mainCookies = explode('=', $cookie);
        $name = trim($mainCookies[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
header("location:../View/welcome.php");
exit();