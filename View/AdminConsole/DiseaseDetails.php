<?php
session_start();
if ($_SESSION["username"] == NULL) {
    header("location:../LoginView.php");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="refresh" content="15" />
        <title>ADMS Admin Panel</title>
        <link rel="stylesheet" href="../../css/screen.css" type="text/css" media="screen" title="default" />

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
        <script type="text/javascript">
            function atleast_onecheckbox(e) {
                if ($("input[type=checkbox]:checked").length === 0) {
                    e.preventDefault();
                    alert('Please select at least one checkbox');
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

        <!--  start nav-outer-repeat................................................................................................. START -->
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

                        <ul class="select"><li><a href="Requests.php"><b>Users</b><!--[if IE 7]><!--></a><!--<![endif]-->

                            </li>
                        </ul>

                        <div class="nav-divider">&nbsp;</div>

                        <ul class="current"><li><a href="#"><b>Disease Details</b><!--[if IE 7]><!--></a><!--<![endif]-->
                                <div class="select_sub show">
                                    <ul class="sub">
                                        <li  class="sub_show"><a href="#">Forum Requests</a></li>
                                        <li><a href="DiseaseHistory.php">Disease-History</a></li>          
                                    </ul>
                                </div>
                            </li>
                        </ul>

                        <ul class="select"><li><a href="Signup.php"><b>Admin Sign-Up</b><!--[if IE 7]><!--></a><!--<![endif]-->

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
                    <h1>Disease Details Requests for the Forum</h1>
                </div>
                <!-- end page-heading -->
                <form action="../../Model/AdminConsole/disease.php" method="POST" onsubmit="return atleast_onecheckbox(event);">
                    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
                        <tr>
                            <th rowspan="3" class="sized"><img src="../../images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
                            <th class="topleft"></th>
                            <td id="tbl-border-top">&nbsp;</td>
                            <th class="topright"></th>
                            <th rowspan="3" class="sized"><img src="../../images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
                        </tr>
                        <tr>
                            <td id="tbl-border-left"></td>
                            <td>
                                <!--  start content-table-inner ...... START -->
                                <div id="content-table-inner">

                                    <!--  start table-content  -->
                                    <div id="table-content">


                                        <!--  start plant-desease-table............. -->
                                        <form id="mainform">
                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                                                <thead>
                                                    <tr>
                                                        <th class="table-header-check"><a id="toggle-all" ></a> </th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Disease ID</a>	</th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Plant Name</a>	</th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Disease Type</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1t"><a href="">District</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Region</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Weather Condition</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Soil Condition</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Date</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">User Comment</a></th>
                                                        <th class="table-header-repeat line-left minwidth-1"><a href="">User Name</a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    include_once("../../Controller/DBConnection/DBConnectionController.php");

                                                    // Create connection
                                                    $dbConn = new DBConnectionController();
                                                    $conn = $dbConn->getConnetion();
                                                    
                                                    $query = "SELECT * FROM plant_desease_detail WHERE type='pending' ORDER BY desease_ID DESC";
                                                    $result = mysqli_query($conn,$query);
                                                    $count = mysqli_num_rows($result);
                                                    if ($count == 0) {
                                                        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                                                    } else {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>

                                                            <tr>
                                                                <td><input type="checkbox" name="enable[]"  value="<?php echo $row['desease_ID']; ?> "></td>
                                                                <td><?php echo $row['desease_ID']; ?></td>
                                                                <td><?php echo $row['plant_name']; ?></td>
                                                                <td><?php echo $row['desease_type']; ?></td>
                                                                <td><?php echo $row['district']; ?></td>
                                                                <td><?php echo $row['region']; ?></td>
                                                                <td><?php echo $row['weather_condition']; ?></td>
                                                                <td><?php echo $row['soil_condition']; ?></td>
                                                                <td><?php echo $row['date']; ?></td>
                                                                <td><?php echo $row['user_comment']; ?></td>
                                                                <td><?php echo $row['user_name']; ?></td>

                                                            </tr>

                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </tbody>

                                            </table>
                                            <!--  end product-table................................... --> 
                                        </form>
                                    </div>
                                    <!--  end content-table  -->

                                    <!--  start actions-box ............................................... -->

                                    <div id="actions-box">
                                        <a href="" class="action-slider"></a>
                                        <div id="actions-box-slider">

                                            <input class="action-edit" type="submit" name="confirm" value="confirm"></input>
                                            <input class="action-delete" type="submit" name="ignore" value="ignore"></input>

                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    </form>              

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