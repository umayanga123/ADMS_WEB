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


        <script type="text/javascript" src="../../js/sd/view.js"></script>
        <script type="text/javascript" src="../../js/sd/calendar.js"></script>
        <script src="../../js/sd/submit_disable.js"type="text/javascript"></script>

        <script>
            function validateForm() {
                var v1 = document.forms["sdform"]["element_1"].value;
                var v2 = document.forms["sdform"]["element_2"].value;
                var v3 = document.forms["sdform"]["element_3"].value;
                var v4 = document.forms["sdform"]["element_4"].value;
                var v5 = document.forms["sdform"]["element_5"].value;
                var v6 = document.forms["sdform"]["element_6"].value;
                var v7 = document.forms["sdform"]["element_7_1"].value;
                var v8 = document.forms["sdform"]["element_7_2"].value;
                var v9 = document.forms["sdform"]["element_7_3"].value;
                //document.bgColor="green";
                var today = new Date();
                var d = today.getDate();
                var m = today.getMonth() + 1; //January is 0!
                var y = today.getFullYear();

                if (v1 == null || v1 == "") {
                    alert("Fill the required fields!");
                    return false;
                }

                if (v2 == null || v2 == "") {
                    alert("Fill the required fields!");
                    return false;
                }
                if (v3 == null || v3 == "") {
                    alert("Fill the required fields!");
                    return false;
                }
                if (v4 == null || v4 == "") {
                    alert("Fill the required fields!");
                    return false;
                }
                if (v5 == null || v5 == "") {
                    alert("Fill the required fields!");
                    return false;
                }

                if (v6 == null || v6 == "") {
                    alert("Fill the required fields!");
                    return false;
                }

                if ((v7 == null || v7 == "") || (v8 == null || v8 == "") || (v9 == null || v9 == "")) {
                    alert("Fill the required fields!");
                    return false;
                }
                if (!/^[a-zA-Z ]*$/gi.test(v1)) {
                    alert('Only letters and white space allowed  for Plant Name!!');
                    return false;
                }

                if (!/^[a-zA-Z ]*$/gi.test(v5)) {
                    alert('Only letters and white space allowed for District!!');
                    return false;
                }

                if (!/^[a-zA-Z ]*$/gi.test(v6)) {
                    alert('Only letters and white space allowed for Region!!');
                    return false;
                }

                if (!/^[0-9]+$/gi.test(v7)) {
                    alert('Invalid Input Type for Date!!');
                    return false;
                }
                if (!/^[0-9]+$/gi.test(v8)) {
                    alert('Invalid Input Type for Date!!');
                    return false;
                }
                if (!/^[0-9]+$/gi.test(v9)) {
                    alert('Invalid Input Type for Date!!');
                    return false;
                }
                if (v9.length < 4) {
                    alert('Invalid Year!!');
                    return false;
                }
                //------------------------------------------------------------------------------------------------
                if (v9 == y && v7 > m) {
                    alert('Invalid Month!!');
                    return false;
                }

                if (v9 == y && v7 == m && v8 > d) {
                    alert('Invalid Day!!');
                    return false;
                }

                if (v9 > y) {
                    alert('Invalid Year!!');
                    return false;
                }
                if (y - v9 > 1) {
                    alert('Sorry Date is Past than 1 Year!!');
                    return false;
                }
                if (v7 == 4 || v7 == 6 || v7 == 9 || v7 == 11) {
                    if (v8 > 30) {
                        alert('Invalid Day!!');
                        return false;
                    }
                }
                if (v7 == 1 || v7 == 3 || v7 == 5 || v7 == 7 || v7 == 8 || v7 == 10 || v7 == 12) {
                    if (v8 > 31) {
                        alert('Invalid Day!!');
                        return false;
                    }
                }
                if (v7 == 2) {
                    if (v9 % 4 == 0 && v9 % 400 == 0 && v9 % 100 == 0) {
                        if (v8 > 29) {
                            alert('Invalid Day for February!!');
                            return false;
                        }
                    }
                    else {
                        if (v8 > 28) {
                            alert('Invalid Day for February!!');
                            return false;
                        }
                    }

                }

            }

        </script>


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
                            <li><a href="send D.php"  class="current">Disease Details</a></li>
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
                    <form id="form_908017" class="appnitro" enctype="multipart/form-data" method="post" action="../../Model/SendDiseaseModel.php" name="sdform" onsubmit="return validateForm()">
                        <div class="form_description">
                            <h2>Send Disease Details</h2>
                            <p>ADMS </p>
                            <p align="right">Required<s> *</s></p>
                        </div>						
                        <ul >

                            <li id="li_1" class="required" >
                                <label class="description" for="element_1">Plant Name <s> *</s> </label>
                                <div>
                                    <input id="element_1" name="element_1" class="element text large" type="text" maxlength="35" value=""/> 
                                </div><p class="guidelines" id="guide_1"><small>Enter the Name of the Infected Plant</small></p> 
                            </li>		<li id="li_2" >
                                <label class="description" for="element_2">Disease Type <s> *</s></label>
                                <div>
                                    <select class="element select medium" id="element_2" name="element_2"> 
                                        <option value="" selected="selected"></option>
                                        <option value="Fungal Disease" >Fungal Disease</option>
                                        <option value="Bacterial Disease" >Bacterial Disease</option>
                                        <option value="Viral Disease" >Viral Disease</option>
                                        <option value="Other" >Other</option>

                                    </select>
                                </div><p class="guidelines" id="guide_2"><small>Select a Type of the infection</small></p> 
                            </li>		<li id="li_3" >
                                <label class="description" for="element_3">Weather Condition <s> *</s></label>
                                <div>
                                    <select class="element select large" id="element_3" name="element_3"> 
                                        <option value="" selected="selected"></option>
                                        <option value="Heavy Rainfall since weeks" >Heavy Rainfall since weeks</option>
                                        <option value="Heavy Rainfall from recently" >Heavy Rainfall from recently</option>
                                        <option value="Light Rainfall" >Light Rainfall</option>
                                        <option value="Cloudy" >Cloudy</option>
                                        <option value="Sunny" >Sunny</option>
                                        <option value="Very Sunny" >Very Sunny</option>
                                        <option value="Cold - No Rain" >Cold - No Rain</option>
                                    </select>
                                </div><p class="guidelines" id="guide_3"><small>Select the Weather Condition When the Infection was Found</small></p> 
                            </li>		<li id="li_4" >
                                <label class="description" for="element_4">Soil Condition <s> *</s></label>
                                <div>
                                    <select class="element select medium" id="element_4" name="element_4"> 
                                        <option value="" selected="selected"></option>
                                        <option value="Heavy" >Heavy</option>
                                        <option value="Light" >Light</option>
                                        <option value="Good" >Good</option>
                                        <option value="Sandy" >Sandy</option>
                                        <option value="Clay" >Clay</option>
                                        <option value="Loam" >Loam</option>
                                        <option value="Poor" >Poor</option>


                                    </select>
                                </div><p class="guidelines" id="guide_4"><small>Select the Type of Soil Condition</small></p> 
                            </li>		<li id="li_5" >
                                <label class="description" for="element_5">District <s> *</s></label>
                                <div>
                                    <input id="element_5" name="element_5" class="element text medium" type="text" maxlength="30" value="" list="district"/> 
                                    <datalist id="district"> <option value="">
                                            <option value="Ampara"/>
                                            <option value="Anuradhapura"/>
                                            <option value="Badulla"/>
                                            <option value="Batticaloa"/>
                                            <option value="Colombo"/>
                                            <option value="Galle"/>
                                            <option value="Gampaha"/>
                                            <option value="Hambantota"/>
                                            <option value="Jaffna"/>
                                            <option value="Kalutara"/>
                                            <option value="Kandy"/>
                                            <option value="Kegalle"/>
                                            <option value="Kilinochchi"/>
                                            <option value="Kurunegala"/>
                                            <option value="Mannar"/>
                                            <option value="Matale"/>
                                            <option value="Matara"/>
                                            <option value="Moneragala"/>
                                            <option value="Mullaitivu"/>
                                            <option value="Nuwara Eliya"/>
                                            <option value="Polonnaruwa"/>
                                            <option value="Puttalam"/>
                                            <option value="Ratnapura"/>
                                            <option value="Trincomalee"/>
                                            <option value="Vavuniya"/>
                                    </datalist>

                                </div> 
                            </li>		<li id="li_6" >
                                <label class="description" for="element_6">Region <s> *</s></label>
                                <div>
                                    <input id="element_6" name="element_6" class="element text medium" type="text" maxlength="30" value=""/> 
                                </div> 
                            </li>		<li id="li_7" >
                                <label class="description" for="element_7">Infection Found Date <s> *</s></label>
                                <span>
                                    <input id="element_7_1" name="element_7_1" class="element text" size="2" maxlength="2" value="" type="text"> /
                                        <label for="element_7_1">MM</label>
                                </span>
                                <span>
                                    <input id="element_7_2" name="element_7_2" class="element text" size="2" maxlength="2" value="" type="text"> /
                                        <label for="element_7_2">DD</label>
                                </span>
                                <span>
                                    <input id="element_7_3" name="element_7_3" class="element text" size="4" maxlength="4" value="" type="text" >
                                        <label for="element_7_3">YYYY</label>
                                </span>

                                <span id="calendar_7">
                                    <img id="cal_img_7" class="datepicker" src="../../images/sd/calendar.gif" alt="Pick a date.">	
                                </span>
                                <script type="text/javascript">
                                    Calendar.setup({
                                        inputField: "element_7_3",
                                        baseField: "element_7",
                                        displayArea: "calendar_7",
                                        button: "cal_img_7",
                                        ifFormat: "%B %e, %Y",
                                        onSelect: selectDate
                                    });
                                </script>

                            </li>		<li id="li_8" >
                                <label class="description" for="element_8">Description about the Plant Infection  </label>
                                <div>
                                    <textarea id="element_8" name="element_8" class="element textarea small"></textarea> 
                                </div> 
                            </li>		<li class="section_break">
                                <h3 style="color:#090">Click Next to Send the Data and Proceed.. <s> *</s></h3>
                            </li>

                            <li class="buttons"><div align="right">
                                    <input type="hidden" name="next" value="Next" align="right" />

                                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Next" align="right" onclick="codename()" /></div>
                            </li>
                            <p></p>
                            </li></ul></form>
                    <!--<script type="text/javascript" src="jquery.js"> </script><script type="text/javascript" src="../../js/sd/ex.js"> </script>-->

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

                Copyright © 2021 A.D.M.S - Designed

            </div>
        </div>
    </body>
</html>
