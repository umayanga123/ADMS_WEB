<?php
session_start();
include("../../Controller/DBConnection/DBConnectionController.php");

if ($_SESSION["username"] == NULL) {
    header("location:../../Controller/logout.php");
    exit();
}


$name = $_SESSION["username"];
$_SESSION["edit_name"] = $name;


$query = "SELECT username, password,fullname,depname,depid,contactno,email,address FROM s_user WHERE username='$name'";
$result = mysql_query($query);
if (!$result) {
    echo (mysql_error());
}


$row = mysql_fetch_array($result);
$un = $row["username"];
$pw = $row["password"];
$fn = $row["fullname"];
$dn = $row["depname"];
$di = $row["depid"];
$co = $row["contactno"];
$em = $row["email"];
$ad = $row["address"];


if (isset($_POST["sub"])) {

    $user_name = $_POST["username"];
    $P_W = $_POST["password"];
    $vfn = $_POST["fullname"];
    $vdn = $_POST["depname"];
    $vdi = $_POST["depid"];
    $vco = $_POST["contactno"];
    $vem = $_POST["email"];
    $vad = $_POST["address"];


    if ($un != $user_name) {

        $queryT = "SELECT username,'true' AS success FROM g_user WHERE username = '$user_name' UNION
                        SELECT username,'true' AS success FROM s_user WHERE username = '$user_name'";



        $result = mysql_query($queryT);
        while ($row = mysql_fetch_array($result)) {
            $success = $row["success"];
        }

        if ($success == "true") {

            echo '<script language="javascript">';
            //echo 'alert("message successfully sent")';
            echo 'alert("Username already taken please try diffrent name")';
//            echo "<font color='red'>Username already taken please try diffrent name<br></font>";
//            echo "<font color='#000000'> Our suggestion for user name</font><br>";
//            echo "1:- ";
//            echo $_SESSION["username"];
//            echo "<font color='#000000'>_a</font>";
//            echo "<br>2:- ";
//            echo $_SESSION["username"];
//            echo "<font color='#000000'>_abc</font>";
//            echo "<br>3:- ";
//            echo $_SESSION["username"];
//            echo "<font color='#000000'>15</font>";
//            echo "<br>4:- ";
//            echo $_SESSION["username"];
//            echo "<font color='#000000'>27</font>";
//            echo "<br>5:- ";
//            echo $_SESSION["username"];
//            echo "<font color='#000000'>56</font>";
//            echo "<br>6:- ";
//            echo $_SESSION["username"];
//            echo "<font color='#000000'>45</font>";

            echo '</script>';
        } else {


            $name = $_SESSION["edit_name"];
            $query2 = "UPDATE s_user SET username='$user_name', password='$P_W',fullname='$vfn',depname='$vdn',depid='$vdi',contactno='$vco',email='$vem',address='$vad' where username='$name'";


            $result2 = mysql_query($query2);
            if (!$result2) {
                echo (mysql_error());
                exit();
            }

            $_SESSION["username"] = $_POST["username"];
            header("Location:SUserHome.php");
            exit;
        }
    } else {
        $name = $_SESSION["edit_name"];
        $query2 = "UPDATE s_user SET username='$user_name', password='$P_W',fullname='$vfn',depname='$vdn',depid='$vdi',contactno='$vco',email='$vem',address='$vad' where username='$name'";


        $result2 = mysql_query($query2);
        if (!$result2) {
            echo (mysql_error());
            exit();
        }

        $_SESSION["username"] = $_POST["username"];
        header("Location:SUserHome.php");
        exit;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Profile settings</title>
        <meta name="keywords" content="contact, iron, rush, theme, free templates, website templates, CSS, HTML" />
        <meta name="description" content="Iron Rush, free website template provided by tooplate.com" />
        <link href="../../css/tooplate_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../../css/jquery.lightbox-0.5.css" />    

        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery.lightbox-0.5.js"></script>
        <link rel="stylesheet" type="text/css" href="../../css/jquery.lightbox-0.5.css" media="screen" />

        <script type="text/javascript">
            $(function() {
                $('#map a').lightBox();
            });
        </script>
        <script language="javascript">

            function testform()
            {
                if (document.user.password.value != document.user.cpassword.value) {
                    alert("Password and confirmation does not match");
                    return false;
                }
            }
        </script>
        <style type="text/css">
            .style2 {
                color:#FFF;
                font-style:normal;
                text-align:justify;
            }
            .style3 {font-size: 20px; color: #FFD700;}
            .style4 {font-size: 20px;color: #FFD700;}
        </style>
    </head>
    <body>
        <div id="tooplate_body_wrapper">
            <div id="tooplate_wrapper">
                <div id="tooplate_top_bar">
                    <a class="social_btn twitter" href="http://www.twitter.com" target="_blank" >&nbsp;</a>
                    <a class="social_btn facebook" href="http://www.facebook.com" target="_blank">&nbsp;</a>
                    <img src="../../images/onlinelogomaker-092014-1745.png" width="180" height="100" /></div>	


                <div id="tooplate_header">
                    <div id="site_title"><h1>&nbsp;</h1></div>
                    <div id="tooplate_menu">
                        <ul>
                            <li><a href="SUserHome.php">Home</a></li>
                            <li><a href="send D.php">Disease Details</a></li>
                            <li><a href="../../forum/forum_index.php" target="_blank">Forum</a></li>

                            <li>
                                <a href="AdvertiseView.php">Advertisement</a>
                            </li>

                            <li><a href="SContact_us.php" >Contact us</a></li>
                            <li><a href="../../Controller/logout.php">Log Out</a></li>
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->
                </div> <!-- end of forever header -->

                <div id="tooplate_main" style="height:100px" style="width:900px">

                    <h2 align="center">Join with Agro Disease Management System</h2>
                    <p class="style2">Sign up and be a part of ADMS for a better service. You can get efficient solutions for your agricultural problems from our specialists and improve your knowledge as well by joining with us. You can either sign up as a General User or a Special User. At any time you can upgrade your profile to a Special User account if you now prefer to sign up as a General User. To have much more effective services try to upgrade your profile as a Special User.</p>	
                    <p>&nbsp;</p>
                    <div class="cleaner"></div> </div> <!-- end of middle -->

                <link rel="stylesheet" type="text/css" href="../../css/signup.css" /> 
                <!--<script type="text/javascript" src="../js/jquery.signup.js"></script>-->

                <div id="contact_form">
                    <br>


                        <div id="registration-form">
                            <div class='fieldset'>
                                <legend>Edit your details</legend>
                                <form method="POST" data-validate="parsley" name="user" onSubmit="return testform()">
                                    <div class='row'>
                                        <label for='username'>User Name</label>
                                        <span class="style3">
                                            <input type="text" name='username' id='firstname' value="<?php echo $un; ?>" required="required" />
                                        </span></div>
                                    <div class='row'>
                                        <label for="password">Password</label>
                                        <input type="password"  name='password'  data-type="password" value="<?php echo $pw; ?>" required="required" class="input"/>
                                    </div>
                                    <div class='row'>
                                        <label for="cpassword">Confirm your Password</label>

                                        <input type="password" placeholder="Confirm Your Password" name='cpassword' required="required" class="input" />
                                    </div>
                                    <div class='row'>
                                        <label for='fullname'>Full Name</label>
                                        <span class="style3">
                                            <input type="text"  name='fullname' id='fullname' value="<?php echo $fn; ?>" required="required"/>
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='depname'>Dep Name</label>
                                        <span class="style3">
                                            <input type="text" name='depname' id='depname' value="<?php echo $dn; ?>" required="required"/>
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='depid'>Dep ID</label>
                                        <span class="style3">
                                            <input type="text" name='depid' id='depid' value="<?php echo $di; ?>" required="required" />
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='tp'>Contact No</label>
                                        <span class="style3">
                                            <input type="text" name='contactno' id='tp' value="<?php echo $co; ?>" required="required" />
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='email'>E-Mail</label>
                                        <span class="style3">
                                            <input type="text" name='email' id='email' value="<?php echo $em; ?>" required="required"  />
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='address'>Address</label>
                                        <span class="style3">
                                            <input type="text" name='address' id='address' value="<?php echo $ad; ?>" required="required"  />
                                        </span>
                                    </div>
                                    <input type="submit" value="Update" name="sub"></input>
                                </form>
                            </div>
                        </div>
                </div>
            </div>


            <!--end sign up-->

            <div class="cleaner"></div>
        </div> <!-- end of main -->

        <div class="cleaner"></div>
        </div> <!-- end of forever wrapper -->
        </div> <!-- end of forever body wrapper -->
        <br>
            <div id="tooplate_footer_wrapper">
                <div id="tooplate_footer">


                    <img src="../../images/sd/f.gif" height="207" width="963"   />
                    <div class="cleaner"></div>
                </div>
            </div>

            <div id="tooplate_copyright_wrapper">
                <div id="tooplate_copyright">

                    Copyright © 2021 A.D.M.S - Designed 

                </div>
            </div>
    </body>
</html>


