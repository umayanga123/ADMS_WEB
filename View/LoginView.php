<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ADMS</title>
        <meta name="keywords" content="iron, rush, theme, free templates, website templates, CSS, HTML" />
        <meta name="description" content="Iron Rush, free template by tooplate.com" />
        <link href="../css/tooplate_style.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="../js/swfobject/swfobject.js"></script>
        <script type="text/javascript">
            var flashvars = {};
            flashvars.cssSource = "../css/piecemaker.css";
            flashvars.xmlSource = "../css/piecemaker.xml";

            var params = {};
            params.play = "true";
            params.menu = "false";
            params.scale = "showall";
            params.wmode = "transparent";
            params.allowfullscreen = "true";
            params.allowscriptaccess = "always";
            params.allownetworking = "all";

            swfobject.embedSWF('../js/swfobject/piecemaker.swf', 'piecemaker', '960', '400', '10', null, flashvars,
                    params, null);

        </script>
        <script>
            function testuser() {
                var v1 = document.forms["login"]["username"].value;
                var v2 = document.forms["login"]["password"].value;

                if (v1 == null || v1 == "") {
                    alert("Fill the required fields!");
                    return false;
                }

                if (v2 == null || v2 == "") {
                    alert("Fill the required fields!");
                    return false;
                }
            }
        </script>
        <style type="text/css">

            .style2 {
                color: #333333;

            }
            .style3 {
                font-size: 28px;
                color: #bd9213;
            }
            .style4 {
                font-weight: bold;
                color: #000000;
            }

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
                            <li><a href="LoginView.php" class="current">&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
                            <!--<li><a href="#" title="Sorry! You are Not a Special User">Disease Details</a></li>
                            <li><a href="#" title="Sorry! You need to Login">Forum</a></li>
                  
                            <li><a href="#" title="Sorry! You are Not a Special User yet">Advertisement</a></li>--->

                            <li><a href="Contact_us.php" >Contact us</a></li>
                            
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->
                </div> <!-- end of forever header -->

                <div id="tooplate_middle">
                    <div id="templatemo_fw">
                        <div id="piecemaker">
                        </div>
                    </div>
                </div><!-- end of middle -->

                <div id="tooplate_main">

                    <div class="col_allw300">
                        <h2>Agro Disease Management System </h2>
                        <p class="style2" align="justify"/>
                        Agro Disease Management System is a project
                        targeted to make the Agriculture field in Sri-Lanka
                        much more efficient.
                        So this is a IT solution that speed up the process
                        of finding information related to Agriculture
                        field, contacting Agriculture Field specialists and
                        getting solutions to the problems encounted in the
                        Agriculture field. <br/>
                        The system is designed and implemented with a large scope to cover most of the requirements that an user will need to fulfil. The system consists of a website that can be accessed from anywhere through Internet and an Android application for mobile usage of the system. Both are developed with simple user interfaces and menus.So our team hope that you'll find the ADMS useful and effective!
                        <br/>
                        <p>Sign in to the System for more features.</p>
                        <div class="cleaner"></div>
                    </div>

                    <!--login part-->

                    <div class="container" style="margin-left:650px">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-7">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <span class="style3"><h2>Login</h2></span>
                                    </div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="../Controller/LoginController.php" name="login" onSubmit="return testuser()">
                                            <div class="form-group">
                                                <label for="inputUsername" class="col-sm-3 control-label">User Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="username" class="form-control" id="inputUsername" placeholder="User Name" value="" required="required" />
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" value="" required="required" />
                                                </div>
                                                <br/>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                </div>
                                            </div>
                                            <div class="form-group last">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type=submit name="submit" value="submit" class="btn btn-success btn-sm style4">Sign in</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br/>
                                    <div class="panel-footer">Not Registered? <a href="GUserSignupView.php" class="">Register here</a><br>
                                            <a href="../Help Manual/HTML Format/Welcome.html" target="_blank">Help</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end of main -->




                <div class="col_allw301" style="float:left"style="margin-left:4500px"> 

                    <h4 style="color:brown" >Newly Released Crops</h4>

                    <img src="../images/sd/rice.png" width="120px" height="120px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <img src="../images/sd/tomato.png" width="120px" height="120px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <img src="../images/sd/potato.png" width="120px" height="120px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <img src="../images/sd/banana.png" width="120px" height="120px" />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <img src="../images/sd/okra.png" width="120px" height="120px" /><br />
                    Rice: Ld 408 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Tomato - Lanka Cherry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Potato - Golden Star&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banana - Millewa Suwandal
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Okra - Hybrid Variety
                    <br/>  <br/> 


                </div>

            </div>
        </div><!-- end of forever wrapper -->
        </div><!-- end of forever body wrapper -->
        <div class="cleaner"></div>
        <div id="tooplate_footer_wrapper">
            <div id="tooplate_footer"><img src="../images/sd/f.gif" height="207" width="963"   />
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
