<?php
session_start();
include("../../Controller/DBConnection/DBConnectionController.php");

if ($_SESSION["username"] == NULL) {
    header("location:../../Controller/logout.php");
    exit();
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Advertisement</title>
        <meta name="keywords" content="contact, iron, rush, theme, free templates, website templates, CSS, HTML" />
        <meta name="description" content="Iron Rush, free website template provided by tooplate.com" />
        <link href="../../css/tooplate_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../../css/jquery.lightbox-0.5.css" media="screen"/>    
        <link rel="stylesheet" type="text/css" href="../../css/Adv_signup.css" /> 


        <script type="text/javascript" src="../../js/jquery.js"></script>
        <script type="text/javascript" src="../../js/jquery.lightbox-0.5.js"></script>

        <!-- jQuery -->
        <script src="../../js/jquery(2).js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/bootbox/bootbox.min.js"></script>



        <style type="text/css">
            <!--
            .style3 {font-size: 13px}
            .style4 {font-size: 16px}
            -->
        </style>



        <script type="text/javascript">

            function showMe(it, box) {
                var vis = (box.checked) ? "block" : "none";
                document.getElementById(it).style.display = vis;
            }

            function show() {
                alert("Password and confirmation does not match");

                BootstrapDialog.show({
                    message: 'Hi Apple!'
                });



            }

            function submitform()
            {
                //if (document.myform.onsubmit())
                //{
                    bootbox.alert("Hello world!");
               // }
            }



        </script>




    </head>
    <body>
        <div id="tooplate_body_wrapper">
            <div id="tooplate_wrapper">
                <div id="tooplate_top_bar">
                    <a class="social_btn twitter" href="http://www.twitter.com" target="_blank" >&nbsp;</a>
                    <a class="social_btn facebook" href="http://www.facebook.com" target="_blank">&nbsp;</a>
                    <img src="../../images/onlinelogomaker-092014-1745.png" width="180" height="100" />
                </div>	

                <div id="tooplate_header">
                    <div id="site_title"><h1>&nbsp;</h1></div>
                    <div id="tooplate_menu">
                        <ul>
                            <li><a href="../SUser/SUserHome.php">Home</a></li>
                            <li><a href="../SUser/send D.php">Disease Details</a></li>
                            <li><a href="../../forum/forum_index.php" target="_blank">Forum</a></li>

                            <li>
                                <a href="AdvertiseView.php" class="current">Advertisement</a>
                            </li>


                            <li><a href="SContact_us.php" >Contact us</a></li>

                            <li><a href="../../Controller/logout.php">Log Out</a></li>
                        </ul>    	
                    </div> <!-- end of tooplate_menu -->
                </div> <!-- end of forever header -->

                <div id="tooplate_middle_subpage">
                    <h2>ADMS</h2>

                </div> <!-- end of middle -->
                <br/>  

                <!--category data input-->

                <div id="contact_form" >
                    <br/>
                    <div id="registration-form">
                        <div class='fieldset'>
                            <legend >Give your advertisement details</legend>
                            <form action="../../Model/advertisementModel.php"  data-validate="parsley" name="advertisement" method="post" id="myform"  onsubmit="submitform()">
                                Looking for sale or purchase?<br/>

                                <input type="radio" name="looking" value="sale" checked="true"/> Sale<br>
                                    <input type="radio" name="looking" value="purchase"/> Purchase
                                    <div class='row'>
                                        <span class="style3">
                                            <table>
                                                <tr>       
                                                    Select a category  
                                                    <div class='row'>
                                                        <td width="200"><input type="checkbox" name="c2" onClick="showMe('div2', this)" value="NULL" />Food Items<br/></td></div>
                                                    <div class='row'>
                                                        <td width="200"><input type="checkbox" name="c3" onClick="showMe('div3', this)" value="NULL"/>Agriculture<br/></td></div>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div id="div2" style="display:none">
                                                            <select action="../../Model/AdvertiseModel.php" name="food" MULTIPLE SIZE="5" id="t1">                            
                                                                <option value="Vegetables">Vegetables</option>
                                                                <option value="Meat">Meat</option>
                                                                <option value="Fish">Fish</option>
                                                                <option value="Eggs">Eggs</option>
                                                                <option value="Other Food Items">Other Food Items</option>

                                                            </select>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div id="div3" style="display:none">
                                                            <select action="../../Model/AdvertiseModel.php" name="Agriculture" MULTIPLE SIZE="5" id="t1">
                                                                <option value="Seeds">Seeds</option>
                                                                <option value="Crops">Crops</option>
                                                                <option value="Fertilizers">Fertilizers</option>
                                                                <option value="Pesticides">Pesticides</option>
                                                                <option value="Other Agriculture Items">Other Agriculture Items</option>

                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </span>
                                        <p>Price</p>
                                        <input type="number" name="price" required="required" value="Type your price here"/>

                                        <p>Type your description</p>
                                        <textarea  name="a_description" required="required">Type your description here</textarea>
                                        <br/>
                                    </div>

                                    <input type="submit" value="Send your advertisment" name="asub" ></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <div class="cleaner"></div>
            <div></div> <!-- end of forever wrapper -->
            <div></div> <!-- end of forever body wrapper -->
            <br/>
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
        </div>
    </body>
</html>
