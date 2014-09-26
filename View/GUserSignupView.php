<!--test-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMS,General User Sign Up</title>
<meta name="keywords" content="contact, iron, rush, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Iron Rush, free website template provided by tooplate.com" />
<link href="../css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css" />    
    
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
});
</script>

<style type="text/css">
<!--
.style3 {font-size: 13px}
.style4 {font-size: 16px}
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
                <li><a href="LoginView.php">Home</a></li>
                <li><a href="#">Disease Details</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#" class="current">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_subpage">
    	<h2>Sign Up with ADMS</h2>
        <p>Sign up and be a part of ADMS for a better service.</p>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    <!--	<div class="col_w960">
        	<div class="col_w450 float_l">
                
			  <div class="col_w200 float_l">
 					<h4>Map</h4>
					<div class="cleaner h10"></div>
					<div id="map">
		            <a href="images/map_big.jpg" title="Map"><img width="300" height="190" src="images/map_thumb.jpg" alt="Map" /></a>
					</div>
		            <div class="cleaner h30"></div>				
                    <h4>Mailing Address</h4>
                    <h6><strong>Company Name</strong></h6>
                    142-115 Maecenas ac eros ut, <br />
					Curabitur vehicula elit, 15540 <br />
					Suspendisse euismod <br /><br/>
					Phone: 010-010-5500 <br />
					email: <a href="mailto:info@yoursite.com">info@yoursite.com</a>    
              </div>
                <div class="cleaner"></div>
            </div>
-->
<!--signup-->
<link rel="stylesheet" type="text/css" href="../css/signup.css" /> 
<script type="text/javascript" src="../js/jquery.signup.js"></script>
   

     <div class="col_w450 float_r">
				<div id="contact_form">
        
                                    <input type="radio" name="usertype" value="guser" checked>
                                    <span class="style4">General User</span>
                                    <input type="radio" name="usertype"  value="suser" onclick="document.location.href = 'SUserSignupView.php'">
                                    <span class="style4">Special User</span>
      
<div id="registration-form">
	<div class='fieldset'>
    <legend>Sign Up Now!</legend>
    <form action="../Model/GUserSignupModel.php" method="POST" data-validate="parsley">
			<div class='row'>
				<label for='firstname'>User Name</label>
			    <span class="style3">
                                <input type="text" placeholder="User Name" name='username' id='firstname' data-required="true" data-error-message="Your User Name is required"  />
			    </span></div>
			<div class='row'>
				<label for="password">Password</label>
                                <input type="password" placeholder="Password"  name='password' data-required="true" data-type="password" data-error-message="Password is required" class="input"/>
			</div>
			<div class='row'>
				<label for="cpassword">Confirm your Password</label>
			
                                <input type="password" placeholder="Confirm Your Password" name='cpassword' data-required="true" data-error-message="Password must correspond" class="input" />
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
</div> <!-- end of forever wrapper -->
</div> <!-- end of forever body wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
	  <div class="col_w200 float_r col_last">
    <h4>Contact Us</h4>
            ADMS Team<br /><br/>
            Phone: 010-010-5500 <br />
            email: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
        </div>
        
        <div class="cleaner"></div>
    </div>
</div>

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
    	
		Copyright © 2014<a href="#">A.D.M.S </a> - Designed by <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Group 04 </a></div>
</div>
</body>
</html>
