<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    session_start();

    if ($_SESSION['lang'] == 'english' || $_SESSION['lang'] == 'sinhala' || $_SESSION['tamil'] == 'tamil') {
        if ($_SESSION['lang'] == 'english') {
            include '../Language/english.php';
        } elseif ($_SESSION['lang'] == 'sinhala') {
            include '../Language/sinhala.php';
        } elseif ($_SESSION['lang'] == 'tamil') {
            include '../Language/tamil.php';
        }
    }
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titel_ADMS_special; ?> </title>
        <meta name="keywords" content="contact, iron, rush, theme, free templates, website templates, CSS, HTML" />
        <meta name="description" content="Iron Rush, free website template provided by tooplate.com" />
        <link href="../css/tooplate_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css" />    

        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.lightbox-0.5.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css" media="screen" />

        <script type="text/javascript">
            $(function() {
                $('#map a').lightBox();
            });
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

        <script language="javascript">
            function formValidation()
            {
                var username = document.user.username;
                var password = document.user.password;
                var cpassword = document.user.cpassword;
                var fullname = document.user.fullname;
                var depname = document.user.depname;
                var depid = document.user.depid;
                var contactno = document.user.contactno;
                var email = document.user.email;
                var address = document.user.address;

                if (allLetter(username))
                {
                    if (passid_validation(password, 7, 12))
                    {
                        if (testform(cpassword))
                        {
                            if (allLetterSpaces(fullname))
                            {
                                if (allLetterAndSpaces(depname))
                                {
                                    if (alphanumeric(depid))
                                    {
                                        if (allnumeric(contactno))
                                        {
                                            if (ValidateEmail(email))
                                            {
                                                if (alphanumericSpaces(address))
                                                {
                                                    return true;
                                                }else
                                                    return false;
                                            }else
                                                return false;
                                        }else
                                            return false;
                                    }else
                                        return false;
                                }else
                                    return false;
                            }else
                                return false;
                        }else
                            return false;
                    }else
                        return false;
                }else
                    return false;
                
            }

            function allLetter(username)
            {
                var letters = /^[A-Za-z]+$/;
                if (username.value.match(letters))
                {
                    return true;
                }
                else
                {
                    alert('Username must have alphabet characters only');
                    username.focus();
                    return false;
                }
            }
            function passid_validation(password, mx, my)
            {
                var password_len = password.value.length;
                if (password_len == 0 || password_len >= my || password_len < mx)
                {
                    alert("Password should not be empty / length be between " + mx + " to " + my);
                    password.focus();
                    return false;
                }
                return true;
            }
            function testform(cpassword)
            {
                if (document.user.password.value != document.user.cpassword.value) {
                    alert("Password and confirmation does not match");
                    return false;
                }
                else
                {
                    return true;
                }
            }

            function allLetterSpaces(fullname)
            {
                var letters = /^[a-zA-Z ]*$/gi;
                if (fullname.value.match(letters))
                {
                    return true;
                }
                else
                {
                    alert('Fullname must have alphabet characters only');
                    fullname.focus();
                    return false;
                }
            }

            function allLetterAndSpaces(depname)
            {
                var letters = /^[a-zA-Z ]*$/gi;
                if (depname.value.match(letters))
                {
                    return true;
                }
                else
                {
                    alert('Department name must have alphabet characters only');
                    depname.focus();
                    return false;
                }
            }
            function alphanumeric(depid)
            {
                var letters = /^[0-9a-zA-Z]+$/;
                if (depid.value.match(letters))
                {
                    return true;
                }
                else
                {
                    alert('User address must have alphanumeric characters only');
                    depid.focus();
                    return false;
                }
            }

            function allnumeric(contactno)
            {
                var numbers = /^[0-9]+$/;
                if (contactno.value.match(numbers))
                {
                    return true;
                }
                else
                {
                    alert('contact no must have numeric characters only');
                    contactno.focus();
                    return false;
                }
            }

            function ValidateEmail(email)
            {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (email.value.match(mailformat))
                {
                    return true;
                }
                else
                {
                    alert("You have entered an invalid email address!");
                    email.focus();
                    return false;
                }
            }

            function alphanumericSpaces(address)
            {
                var letters = /^[0-9a-zA-Z ]*$/gi;
                if (address.value.match(letters))
                {
                    return true;
                }
                else
                {
                    alert('User address must have alphanumeric characters only');
                    address.focus();
                    return false;
                }
            }

        </script>

    </head>
    <body>
        <div id="tooplate_body_wrapper">
            <div id="tooplate_wrapper">
                <div id="tooplate_top_bar">
                    <a class="social_btn twitter" href="http://www.twitter.com" target="_blank" >&nbsp;</a>
                    <a class="social_btn facebook" href="http://www.facebook.com" target="_blank">&nbsp;</a>
                    <img src="../images/onlinelogomaker-092014-1745.png" width="180" height="100" /></div>	


                <div id="tooplate_header">
                    <div id="site_title"><h1>&nbsp;</h1></div>
                    <div id="tooplate_menu">
                        <ul>
                            <li><a href="LoginView.php"><?php echo $home; ?></a></li>

                            <li><a href="Contact_us.php" ><?php echo $contact_us; ?> </a></li>
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->
                </div> <!-- end of forever header -->

                <div id="tooplate_main" style="height:100px" style="width:900px">

                    <h2 align="center"><?php echo $header_Join_with; ?></h2>
                    <p class="style2"><?php echo $header_Sign_up_and_be; ?> </p>	
                    <p>&nbsp;</p>
                    <div class="cleaner"></div> </div> <!-- end of middle -->

                <link rel="stylesheet" type="text/css" href="../css/signup.css" /> 
                <script type="text/javascript" src="../js/jquery.signup.js"></script>

                <div id="contact_form">
                    <br/>

                    <input type="radio" name="usertype" value="guser" onclick="document.location.href = 'GUserSignupView.php'"/>
                    <span class="style4"><?php echo $General_user; ?></span>
                    <input type="radio" name="usertype" value="suser" checked>
                        <span class="style4"><?php echo $Special_user; ?></span>

                        <div id="registration-form">
                            <div class='fieldset'>
                                <legend><?php echo $Sign_up; ?></legend>
                                <form action="../Model/SUserSignupModel.php" method="POST" data-validate="parsley" name="user" onSubmit="return formValidation();">
                                    <div class='row'>
                                        <label for='username'><?php echo $placeholder_user_name; ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $placeholder_user_name; ?>' name='username' id='username' value="" required="required" />
                                        </span></div>
                                    <div class='row'>
                                        <label for="password"><?php echo $placeholder_password; ?></label>
                                        <input type="password" placeholder='<?php echo $placeholder_password; ?>'  name='password' id='password' data-type="password" value="" required="required" class="input"/>
                                    </div>
                                    <div class='row'>
                                        <label for="cpassword"><?php echo $Confirm_password; ?></label>

                                        <input type="password" placeholder='<?php echo $Confirm_password; ?>' name='cpassword' id='cpassword' value="" required="required" class="input" />
                                    </div>
                                    <div class='row'>
                                        <label for='fullname'><?php echo $Full_name ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $Full_name ?>' name='fullname' id='fullname' value="" required="required"/>
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='depname'><?php echo $Dep_name; ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $Name_of_Department ?>' name='depname' id='depname' value="" required="required"/>
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='depid'><?php echo $Dep_ID ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $Dep_ID ?>' name='depid' id='depid' value="" required="required" />
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='tp'><?php echo $Contact_No ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $Contact_No ?>' name='contactno' id='contactno' value="" required="required" />
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='email'><?php echo $E_Mail ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $E_Mail ?>' name='email' id='email' value="" required="required"  />
                                        </span>
                                    </div>
                                    <div class='row'>
                                        <label for='address'><?php echo $Address ?></label>
                                        <span class="style3">
                                            <input type="text" placeholder='<?php echo $Address ?>' name='address' id='address' value="" required="required"  />
                                        </span>
                                    </div>
                                    <input type="submit" value=<?php echo $Register; ?> />
                                </form>
                            </div>
                        </div>
                </div>
            </div>


            <!--end sign up-->

            <div class="cleaner"></div>
        </div> <!-- end of main -->

        <div class="cleaner"></div>
        <div> </div> <!-- end of forever wrapper -->
        <div></div> <!-- end of forever body wrapper -->
        <br>
            <div id="tooplate_footer_wrapper">
                <div id="tooplate_footer">

                    <img src="../images/sd/f.gif" height="207" width="963"   />
                    <div class="cleaner"></div>
                </div>
            </div>

            <div id="tooplate_copyright_wrapper">
                <div id="tooplate_copyright">

                    Copyright © 2014 A.D.M.S - Designed by Group 04 

                </div>
            </div>
    </body>
</html>


