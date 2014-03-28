<?php include_once('config.php')?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Likuyani Constituency</title>
<meta name="keywords" content="likuyani constituency, bursary, application, sub county, projects management, bursary form" />
<meta name="description" content="Likuyani constituency is located in the kakamega sub county and this website offers an online portal for members to benefit from its services" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

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
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>
<body>
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
        <div id="site_title">
            <a href="http://www.templatemo.com" rel="nofollow"><span>Likuyani Constituency</span></a>
        </div> <!-- end of site_title -->
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="idex.html">Projects</a></li>
                <li><a href="bursary.php">Bursary</a></li>
                <li><a href="idex.html">NoticeBoard</a></li>
                <li class="last"><a href="idex.html">Contact</a></li>
            </ul>
            <div id="search_box">
                <form action="#" method="post">
                    <input type="text" value="Search on this website" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                  	<input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                </form>
            </div>
            <div class="cleaner"></div>    	
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    <div class="cleaner"></div>
</div>
    
<div id="templatemo_wrapper">

   

    <div id="templatemo_content">
    	<div id="templatemo_main_content">
        
        	<div class="content_box">
                <div>
				<ul style="display:display-block;">
					<li style="display:inline;"><a href="personaldata.php">Personal data</a></li>|
					<li style="display:inline;"><a href="academia.php" class="academia.php">Academia</a></li>|
					<li style="display:inline;"><a href="previousallocations.php">Previous Allocations</a></li>|
					<li style="display:inline;"><a href="applicationstatus.php">Application Status</a></li>|
					
					<li style="display:inline;"><a href="allocations.php">Allocations</a></li>|
					<li style="display:inline;"><a href="homepagephotos.php">Homepage Photos</a></li>|
					<li style="display:inline;"><a href="mpmessage.php">MPs Message</a></li>
				</ul>
				</div>
        	<div class="content_box">
				<form method="post" action="<?php $_SELF_TEST?>">
				<p><b style="position:relative;left:2%;display:inline;">Last Name:</b><input type="text" name="lname" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">First Name:</b><input type="text" name="fname" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Year:</b><input type="text" name="year" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Ward:</b><input type="text" name="ward" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Village:</b><input type="text" name="village" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Location:</b><input type="text" name="location" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Sub-location:</b><input type="text" name="sublocation" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Sex:</b><input type="text" name="sex" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Date of Birth:</b><input type="text" name="dob" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Father:</b><input type="text" name="father" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Father's Occupation:</b><input type="text" name="foccupation" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Mother:</b><input type="text" name="mother" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Mother's Occupation:</b><input type="text" name="moccupation" style="position:relative;float:right;right:40%;"></p>
				<p><b style="position:relative;left:2%;display:inline;">Phone Number:</b><input type="text" name="phoneNumber" style="position:relative;float:right;right:40%;"></p>
				<p><input name="submit" type="submit" value="Enter"/></p>
                </form>
			</div>
				<div>
				<p style="float:right;"><a href="academia.php">Next</a></p>
				</div>
				
			</div>
            
            

        </div>
        
        <div id="templatemo_sidebar">
           	<div id="news_box">           
         
                <ul>                   
                    <li>
                        <h6><a href="#">Message from the MP</a></h6>
                        <p>The recent tour to the Matunda sub-county hospital saw many appraisal with messages of its expansion to include a morgue facility. This would offer an avenue even for the local students at medical schools to undertake their internships and produce quality staff</p>
                    </li>
                    
                    <li class="last">
                        
                    </li>
                    
                </ul>
                <div class="btn_more"><a href="#"><span>+</span> View All Posts</a></div>
                <div class="cleaner"></div>     
            </div>
            
            <div class="sidebar_box">
            	<h2><a href="#" title="Only Image"  class="sidebar_box_h2" target="_blank">Forum</a></h2>
                <blockquote>
                    <p align="justify">click the link below to air your view.</p>
                    
                    <cite>- <span><a href="portfolio.html">here</a></span></cite>
                </blockquote>
            </div>
            
        </div>
        
        <div class="cleaner"></div>
    </div>
    <div id="templatemo_content_bottom"></div>
    
    <div id="templatemo_footer">

        Copyright © 2014 <a href="#">Likuyani Consitituency</a> | Designed by <a href="http://www.eflix.com" rel="nofollow" target="_parent">E-Flix</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>

