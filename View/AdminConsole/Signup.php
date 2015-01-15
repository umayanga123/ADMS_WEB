<?php
session_start();
if($_SESSION["username"] == NULL){
    header("location:../LoginView.php");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>ADMS Admin Panel</title>
        <link rel="stylesheet" href="../../css/screen.css" type="text/css" media="screen" title="default" />
        <!--[if IE]>
        <link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
        <![endif]-->

        <!--  jquery core -->
        <script src="../../js/admin/jquery-1.4.1.min.js" type="text/javascript"></script>

        <!--  checkbox styling script -->
        <script src="../../js/admin/ui.core.js" type="text/javascript"></script>
        <script src="../../js/admin/ui.checkbox.js" type="text/javascript"></script>
        <script src="../../js/admin/jquery.bind.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('input').checkBox();
                $('#toggle-all').click(function() {
                    $('#toggle-all').toggleClass('toggle-checked');
                    $('#mainform input[type=checkbox]').checkBox('toggle');
                    return false;
                });
            });
        </script>  

        <!-- Custom jquery scripts -->
        <script src="../../js/admin/custom_jquery.js" type="text/javascript"></script>

        <!-- Tooltips -->
        <script src="../../js/admin/jquery.tooltip.js" type="text/javascript"></script>
        <script src="../../js/admin/jquery.dimensions.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('a.info-tooltip ').tooltip({
                    track: true,
                    delay: 0,
                    fixPNG: true,
                    showURL: false,
                    showBody: " - ",
                    top: -35,
                    left: 5
                });
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

        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="../../js/admin/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).pngFix( );
            });
        </script>
    </head>
    <body> 
        <!-- Start: page-top-outer -->
        <div id="page-top-outer">    

            <!-- Start: page-top -->
            <div id="page-top">

                <!-- start logo -->
                <div id="logo">
                    <a href=""><img src="../../images/onlinelogomaker-092014-1745.png" width="160" height="48" alt="" /></a>
                </div>
                <!-- end logo -->

            </div>
            <!-- End: page-top -->

        </div>
        <!-- End: page-top-outer -->

        <div class="clear">&nbsp;</div>

        <!--  start nav-outer-repeat................................ START -->
        <div class="nav-outer-repeat"> 
            <!--  start nav-outer -->
            <div class="nav-outer"> 

                <!-- start nav-right -->
                <div id="nav-right">

                    <div class="nav-divider">&nbsp;</div>
                    <a href="../../Controller/logout.php" id="logout"><img src="../../images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
                    <div class="clear">&nbsp;</div>

                </div>
                <!-- end nav-right -->


                <!--  start nav -->

                <div class="nav">
                    <div class="table">

                        <div class="nav-divider">&nbsp;</div>

                        <ul class="select"><li><a href="Requests.php"><b>Users</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                
                            </li>
                        </ul>

                        <ul class="select"><li><a href="DiseaseDetails.php"><b>Disease Details</b><!--[if IE 7]><!--></a><!--<![endif]-->

                            </li>
                        </ul>
                        <ul class="current"><li><a href="#"><b>Admin Sign-Up</b><!--[if IE 7]><!--></a><!--<![endif]-->

                            </li>
                        </ul>                       

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--  start nav -->

            </div>
            <div class="clear"></div>
            <!--  start nav-outer -->
        </div>
        <!--  start nav-outer-repeat.................................... END -->

        <div class="clear"></div>

        <!-- start content-outer ......................................START -->
        <div id="content-outer">
            <!-- start content -->
            <div id="content">

                <!--  start page-heading -->
                <div id="page-heading">
                    <h1>Sign-Up as Admin</h1>
                </div>
                <!-- end page-heading -->
                
                    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
                        <!--<tr>
                            <th rowspan="3" class="sized"><img src="../../images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
                            <th class="topleft"></th>
                            <td id="tbl-border-top">&nbsp;</td>
                            <th class="topright"></th>
                            <th rowspan="3" class="sized"><img src="../../images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
                        </tr>-->
                        <tr>
                            <td id="tbl-border-left"></td>
                            <td>
                                <!--  start content-table-inner ...... START -->
                                <div id="content-table-inner">
<!--form sign up start----------------------------->
                 <div id="tooplate_main">
                            <link rel="stylesheet" type="text/css" href="../../css/signup.css" /> 
                            <script type="text/javascript" src="../../js/jquery.signup.js"></script>


                   <div class="col_w450 float_r">
                        <div id="contact_form">

                              <div id="registration-form">
                                <div class='fieldset'>
                                    <legend>Sign Up Now!</legend>
                                    <form action="../../Model/AdminConsole/SignupModel.php" data-validate="parsley" name="user" method="post" onSubmit="return testform()">
                                        <div class='row'>
                                            <label for='firstname'>Admin User Name</label>
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

                    <div class="cleaner"></div>
                </div>
<!--form sign up end------------------------------------------------->
                                  

                                    <div class="clear"></div>

                                </div>
                                <!--  end content-table-inner ............................................END  -->
                            </td>
                            <td id="tbl-border-right"></td>
                        </tr>
                        <tr>
                            <th class="sized bottomleft"></th>
                            <td id="tbl-border-bottom">&nbsp;</td>
                            <th class="sized bottomright"></th>
                        </tr>
                    </table>
                    <div class="clear">&nbsp;</div>

            </div>
            <!--  end content -->
            <div class="clear">&nbsp;</div>
        </div>
        <!--  end content-outer........................................................END -->

        <div class="clear">&nbsp;</div>

        <!-- start footer -->         
        <div id="footer">
            <!--  start footer-left -->
            <div id="footer-left">

                Admin Skin &copy; ADMS. <span id="spanYear"></span> <a href=""></a>. All rights reserved.</div>
            <!--  end footer-left -->
            <div class="clear">&nbsp;</div>
        </div>
        <!-- end footer -->

    </body>
</html>


