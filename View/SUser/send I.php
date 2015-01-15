<?php
session_start();
if ($_SESSION["username"] == NULL) {
    header("location:../../Controller/logout.php");
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title> Send Disease Details</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../../css/view.css"media="all"/>
        <link href="../../css/tooplate_style.css" rel="stylesheet" type="text/css" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script type="text/javascript" src="../../js/sd/view.js"></script>
        <style>
            .style2 {
                color:#FFF;
                font-style:normal;
                text-align:justify;
            }
            .style3 {
                font-size: 28px;
                color: #bd9213;
            }
            .style4 {
                font-weight: bold;
                color: #000000;
            }
            s{
                font-size:10px;
                color:#C00;
            }
        </style>
    </head>
    <body>
        <div id="tooplate_body_wrapper">
            <div id="tooplate_wrapper">
                <div id="tooplate_top_bar">
                    <a class="social_btn twitter" href="http://www.twitter.com" target="_blank" >&nbsp;</a>
                    <a class="social_btn facebook" href="http://www.facebook.com" target="_blank">&nbsp;</a></div>	

                <div id="tooplate_header"><img src="../../images/onlinelogomaker-092014-1745.png" width="180" height="100" align="left" />
                    <div id="site_title"><h1>&nbsp;</h1></div>
                    <div id="tooplate_menu">
                        <ul>
                            <li><a href="SUserHome.php">Home</a></li>
                            <li><a href="send D.php">Disease Details</a></li>
                            <li><a href="../../forum/forum_index.php" target="_blank">Forum</a></li>

                            <li>
                                <a href="Advertisement/AdvertiseView.php">Advertisement</a>
                            </li>

                            <li><a href="SContact_us.php" >Contact us</a></li>
                            <li><a href="../../Controller/logout.php">Log Out</a></li>
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->
                </div> <!-- end of forev
                <!-- end of middle -->
                <div id="tooplate_main" style="height:100px" style="width:900px">

                    <!--  <div class="col_allw300" style="height:200px" style="width:900px">-->
                    <h2>Send Your Agricultural Problems to ADMS!</h2>
                    <p class="style2">You can send your agricultural field problems and issues from here. Simply fill the form below and send us the accurate details of the problem encountered regarding to plant/crops infections and pests. You can send us images of the infected plants you are reporting to us as well.. Our Specialists will help you with appropriate solutions!! </p>
                    <p>&nbsp;</p>
                    <div class="cleaner"></div>
                </div>
                <!--FORM-->

                <img id="top" src="../../images/sd/top.png"alt=""/>
                <div id="form_container">

                    <h1><a>Send Disease Details</a></h1>
                    <form id="form_908018" class="appnitro" enctype="multipart/form-data" method="post" action="../../Model/SendImageModel.php" name="sdform2"  ><ul><div id="reveal"></div><li id="li_10" >
                                <div class="form_description">
                                    <h2>Send Disease Details</h2>
                                    <p>ADMS </p>
                                   <!--  <p align="right">Optional<s> </s></p>-->
                                </div>	
                                <label class="description" for="element_10" style="width:500px">Upload Infected Plant Images (Choose one or many images) <sup style="color:#090"> optional </sup></label>
                                <div> 
                                    <input id="file" name="file" type="file" multiple accept="image/*"  /> 
                                </div>  
                            </li>
                            <img src="../../images/sd/paddy.gif" width="300" height="139" align="right"/>
                            <li class="buttons"><div align="left">
                                    <input type="hidden" name="form_id" value="908017" />
                                    <input id="saveForm2" class="button_text" type="button" name="back" value="Back" onClick="parent.location = 'send D.php'"/> 
                                    <input id="saveForm2" class="button_text" type="submit" name="submit2" value="Send Images"  />
                                </div>
                            </li>
                        </ul>
                    </form>	
                   </form>                 <!--<script type="text/javascript" src="jquery.js"> </script><script type="text/javascript" src="../../js/sd/ex.js"> </script>-->

                </div>
                <img id="bottom" src="../../images/sd/bottom.png" alt=""/>

                <p>&nbsp;</p></div></div>


        <!--login part-->
        <div class="cleaner"></div>


        <div class="cleaner"><!-- end of forever wrapper --></div>
        <div id="tooplate_footer_wrapper">
            <div id="tooplate_footer">


                <img src="../../images/sd/f.gif" height="207" width="963"   />
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
