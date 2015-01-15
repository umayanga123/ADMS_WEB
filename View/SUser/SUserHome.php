<?php
session_start();
if ($_SESSION["username"] == NULL) {
    header("location:../../Controller/logout.php");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content=
              "text/html; charset=utf-8" />
        <title>
            ADMS Special User Home
        </title>
        <meta name="keywords" content=
              "iron, rush, theme, free templates, website templates, CSS, HTML" />
        <meta name="description" content=
              "Iron Rush, free template by tooplate.com" />
        <link href="../../css/tooplate_style.css" rel="stylesheet"
              type="text/css" />
        <link rel="stylesheet" href="../../css/nivo-slider.css" type=
              "text/css" media="screen" />
        <script src="../../js/jquery.min.js" type="text/javascript">
        </script>
        <script src="../../js/jquery.nivo.slider.js" type=
                "text/javascript">
        </script>
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() {
                $('#slider').nivoSlider({
                    effect: 'random',
                    slices: 15,
                    animSpeed: 500,
                    pauseTime: 3000,
                    startSlide: 0, //Set starting Slide (0 index)
                    directionNav: false,
                    directionNavHide: false, //Only show on hover
                    controlNav: false, //1,2,3...
                    controlNavThumbs: false, //Use thumbnails for Control Nav
                    pauseOnHover: true, //Stop animation while hovering
                    manualAdvance: false, //Force manual transitions
                    captionOpacity: 0.8, //Universal caption opacity
                    beforeChange: function() {
                    },
                    afterChange: function() {
                    },
                    slideshowEnd: function() {
                    } //Triggers after all slides have been shown
                });
            });
            //]]>
        </script>
    </head>
    <body>
        <div id="tooplate_body_wrapper">
            <div id="tooplate_wrapper">
                <div id="tooplate_top_bar">
                    <a class="social_btn twitter" href="http://www.twitter.com" target="_blank" >&nbsp;</a>
                    <a class="social_btn facebook" href="http://www.facebook.com" target="_blank">&nbsp;</a><img src=
                                                                                                                 "../../images/onlinelogomaker-092014-1745.png" width=
                                                                                                                 "180" height="100" />
                </div>
                <div id="tooplate_header">
                    <div id="site_title">
                        <h1>&nbsp;

                        </h1>
                    </div>
                    <div id="tooplate_menu">
                        <ul>
                            <li>
                                <a href="SUserHome.php" class="current">Home</a>
                            </li>
                            <li>
                                <a href="send D.php">Disease Details</a>
                            </li>
                            <li>
                                <a href="../../forum/forum_index.php" target="_blank">Forum</a>
                            </li>
                            <li>
                                <a href="AdvertiseView.php">Advertisement</a>
                            </li>


                            <li>
                                <a href="SUserEditView.php">Update Profile</a>
                            </li>
                            <li><a href="SContact_us.php" >Contact us</a></li>

                            <li><a href="../../Controller/logout.php">Log Out</a></li>

                        </ul>
                    </div><!-- end of tooplate_menu -->
                </div><!-- end of forever header -->
                <div id="tooplate_middle">
                    <div id="slider">
                        <a href=
                           "../../Help%20Manual/HTML%20Format/Welcome.html"
                           target="_blank"><img src="../../images/banner_01.jpg"
                                             alt="HELP" title=
                                             "Click on the images for ADMS HELP" /></a> <a href=
                                                                      "../../Help%20Manual/HTML%20Format/Welcome.html"
                                                                      target="_blank"><img src="../../images/banner_02.jpg"
                                             alt="HELP" title=
                                             "Click on the images for ADMS HELP" /></a> <a href=
                                                                      "../../Help%20Manual/HTML%20Format/Welcome.html"
                                                                      target="_blank"><img src="../../images/banner_03.jpg"
                                             alt="HELP" title=
                                             "Click on the images for ADMS HELP" /></a> <a href=
                                                                      "../../Help%20Manual/HTML%20Format/Welcome.html"
                                                                      target="_blank"><img src="../../images/banner_04.jpg"
                                             alt="HELP" title=
                                             "Click on the images for ADMS HELP" /></a> 
                                             <!-- <a href="#"><img src="../../images/slideshow/01.jpg" alt="" title="Phasellus aliquet viverra posuere." /></a> -->
                    </div>
                </div><!-- end of middle -->
                <div id="tooplate_main"/>
                <div class="col_allw300">
                    <h3>
                        Hi <?php echo $_SESSION["username"]; ?>
                        <br/>
                    </h3>
                </div> 


                <div class="cleaner"></div>


                <!-- end of main -->
                <div class="cleaner"></div>
                <h2>
                    <?php ?> Welcome to Agro Disease Management System!
                </h2>
                <p>
                    <em>You are logged in as Special User.</em>
                </p>
                <p class="style2" align="justify">
                    Agro Disease Management System is a project
                    targeted to make the Agriculture field in Sri-Lanka
                    much more efficient.
                    So this is a IT solution that speed up the process
                    of finding information related to Agriculture
                    field, contacting Agriculture Field specialists and
                    getting solutions to the problems encounted in the
                    Agriculture field. <br/></p>
                The system is designed and implemented with a large scope to cover most of the requirements that an user will need to fulfil. The system consists of a website that can be accessed from anywhere through Internet and an Android application for mobile usage of the system. Both are developed with simple user interfaces and menus.So our team hope that you'll find the ADMS useful and effective!
                <br/><a href="../../Help Manual/HTML Format/Welcome.html" target="_blank">Help</a><br><div class="col_allw301" style="float:left"style="margin-left:4500px"> 

                        <h4 style="color:brown" >Newly Released Crops</h4>

                        <img src="../../images/sd/rice.png" width="120px" height="120px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <img src="../../images/sd/tomato.png" width="120px" height="120px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <img src="../../images/sd/potato.png" width="120px" height="120px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <img src="../../images/sd/banana.png" width="120px" height="120px" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <img src="../../images/sd/okra.png" width="120px" height="120px" /><br />
                        Rice: Ld 408 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Tomato - Lanka Cherry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Potato - Golden Star&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banana - Millewa Suwandal
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Okra - Hybrid Variety
                        <br/>  <br/> 


                    </div>

            </div>
        </div><!-- end of forever wrapper -->
        <div</div><!-- end of forever body wrapper -->
        <div class="cleaner"></div>
        <div id="tooplate_footer_wrapper">
            <div id="tooplate_footer"><img src="../../images/sd/f.gif" height="207" width="963"   />
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
