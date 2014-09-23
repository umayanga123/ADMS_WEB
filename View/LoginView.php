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
	  
      swfobject.embedSWF('../js/swfobject/piecemaker.swf', 'piecemaker', '960', '500', '10', null, flashvars,    
      params, null);
    
    </script>

<style type="text/css">
<!--
.style2 {
	color: #333333;
	font-style: italic;
}
.style3 {
	font-size: 28px;
	color: #bd9213;
}
.style4 {
	font-weight: bold;
	color: #000000;
}
-->
</style>
</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar">
    	<a class="social_btn twitter">&nbsp;</a>
        <a class="social_btn facebook">&nbsp;</a>
    </div>	
    
    <div id="tooplate_header">
        <div id="site_title"><h1><img src="../images/onlinelogomaker-092014-1745.png" width="180" height="100" /></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="LoginView.php" class="current">Home</a></li>
                <li><a href="#">Disease Details</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    
    <div id="templatemo_fw">
        <div id="piecemaker">
          
        </div>
	</div><!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_allw300">
        	<h2>Welcome to ADMS!</h2>
            <p class="style2">Agro Disease Management System is a project targeted to make the Agriculture field in Sri-Lanka much more efficient.
<br></br>
	So this is a IT solution that speed up the process of finding information related to Agriculture field, contacting Agriculture Field specialists and getting solutions to the problems encounted in the Agriculture field. </p>
		<p>Sign in to the System for more features.</p>
            <div class="cleaner"></div>
        </div>
                
	<!--login part-->

  <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <span class="style3"><h2>Login</h2></span>
<br>
</br>

              </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="../Controller/LoginController.php">
                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-3 control-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="User Name" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required="">
                            </div>
                            <br>
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
                <div class="panel-footer">Not Registered? <a href="GUserSignupView.php" class="">Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="cleaner"></div>
    </div> <!-- end of main -->

	<div class="cleaner"></div>
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
	  <div class="col_w200 float_r col_last">
    <h4>Contact Us</h4>
            ADMS Team<br /><br />
            Phone: 010-010-5500 <br />
            email: <a href="mailto:info@yoursite.com">info@yoursite.com  </a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
	
    	Copyright © 2014 <a href="#">A.D.M.S </a> - Designed by <a rel="nofollow" href="#" target="_parent">Group 04 </a>
		
    </div>
</div>
</body>
</html>
