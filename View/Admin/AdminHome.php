

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMS,Admin Home</title>
<meta name="keywords" content="iron, rush, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="Iron Rush, free template by tooplate.com" />
<link href="../../css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../../css/nivo-slider.css" type="text/css" media="screen" />
<script src="../../js/jquery.min.js" type="text/javascript"></script>
<script src="../../js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script></head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar">
    	<a class="social_btn twitter">&nbsp;</a>
        <a class="social_btn facebook">&nbsp;</a>
    <img src="../../images/onlinelogomaker-092014-1745.png" width="180" height="100" /></div>	
    
    <div id="tooplate_header">
        <div id="site_title"><h1>&nbsp;</h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="../LoginView.php">Home</a></li>
                <li><a href="#">Disease Details</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="../LoginView.php">Log Out</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle">
    	<div id="slider">
            <a href="#"><img src="../../images/slideshow/05.jpg" alt="" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." /></a>
            <a href="#"><img src="../../images/slideshow/02.jpg" alt="" title="Nullam ante leo, consectetur eget adipiscing et." /></a>
            <a href="#"><img src="../../images/slideshow/03.jpg" alt="" title="Suspendisse sit amet enim elit. Curabitur tempor consequat." /></a>
            <a href="#"><img src="../../images/slideshow/04.jpg" alt="" title="Nulla faucibus luctus quam eget placerat." /></a>
            <a href="#"><img src="../../images/slideshow/01.jpg" alt="" title="Phasellus aliquet viverra posuere." /></a>
        </div>	
	</div> <!-- end of middle -->
    
    <div id="tooplate_main">
    
    	<div class="col_allw300">
        	<h2>Welcome to ADMS Admin Pannel!</h2>
            <ul> <li> Pending Special User Registartion Requests : </li></ul>
        <p><em>You are logged in as Admin. </em></p>
            <div class="cleaner"></div>
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
	
    	Copyright © 2021 <a href="#">A.D.M.S</a> - Designed by <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Aurora</a>
		
    </div>
</div>
</body>
</html>

