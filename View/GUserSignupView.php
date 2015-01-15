<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ADMS,General User Sign Up</title>
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
                    <img src="../images/onlinelogomaker-092014-1745.png" width="180" height="100" /></div>	


                <div id="tooplate_header">
                    <div id="site_title"><h1>&nbsp;</h1></div>
                    <div id="tooplate_menu">
                        <ul>
                            <li><a href="LoginView.php">Home</a></li>


                            <li><a href="Contact_us.php" >Contact us</a></li>
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->
                </div> <!-- end of forever header -->
                <div id="tooplate_main" style="height:100px" style="width:900px">

                    <h2 align="center">Join with Agro Disease Management System</h2>
                    <p class="style2">Sign up and be a part of ADMS for a better service. You can get efficient solutions for your agricultural problems from our specialists and improve your knowledge as well by joining with us. You can either sign up as a General User or a Special User. At any time you can upgrade your profile to a Special User account if you now prefer to sign up as a General User. To have much more effective services try to upgrade your profile as a Special User.</p>	
                    <p>&nbsp;</p>
                    <div class="cleaner"></div> </div> <!-- end of middle -->

                <link rel="stylesheet" type="text/css" href="../css/signup.css" /> 
                <script type="text/javascript" src="../js/jquery.signup.js"></script>

                <div id="contact_form" >
                    <br/>
                    <input type="radio" name="usertype" value="guser" checked align="left"/>
                    <span class="style4" >General User</span>
                    <input type="radio" name="usertype"  value="suser" onclick="document.location.href = 'SUserSignupView.php'"/>
                    <span class="style4">Special User</span>

                    <div id="registration-form">
                        <div class='fieldset'>
                            <legend >Sign Up Now!</legend>
                            <form action="../Model/GUserSignupModel.php" data-validate="parsley" name="user" method="post" onSubmit="return testform()">
                                <div class='row'>
                                    <label for='firstname'>User Name</label>
                                    <span class="style3">
                                        <input type="text" placeholder="User Name" name='username' id='firstname' value="" required="required" />
                                    </span></div>
                                <div class='row'>
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="Password"  name='password' value="" required="required" class="input"/>
                                </div>
                                <div class='row'>
                                    <label for="cpassword">Confirm your Password</label>

                                    <input type="password" placeholder="Confirm Your Password" name='cpassword' value="" required="required" class="input" />
                                </div>
                                <input type="submit" value="Register" name="submit"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--end sign up-->

            <div class="cleaner"></div>
        </div> <!-- end of main -->

        <div class="cleaner"></div>
        <div></div> <!-- end of forever wrapper -->
        <div></div> <!-- end of forever body wrapper -->
        <br/>
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
