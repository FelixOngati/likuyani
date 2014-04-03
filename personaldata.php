
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 include_once("function.php");
 extract($_POST);
 if(isset($submit)){
	 $error=array();
	 $lname=trim($lname);
	 $fname=trim($fname);
	 $year=trim($year);
	 $ward=trim($ward);
	 $village=trim($village);
	 $location=trim($location);
	 $sublocation=trim($sublocation);
	 $gender=trim($gender);
	 $dob=trim($dob);
	 $father=trim($father);
	 $foccupation=trim($foccupation);
	 $mother=trim($mother);
	 $moccupation=trim($moccupation);
	 $phone=trim($phone);	 
	 
	if(empty($lname)){
		 $error[]="Last Name blank!";
		 }
	if(empty($fname)){
		 $error[]="First Name blank!";
		 }
	if(empty($year)){
		 $error[]="Year field blank!";
		 }
	if(empty($ward)){
		 $error[]="Ward field blank!";
		 }
	if(empty($village)){
		 $error[]="Village field blank!";
		 }
	if(empty($location)){
		 $error[]="Location field blank!";
		 }
	if(empty($sublocation)){
		 $error[]="Sublocation blank!";
		 }
	if(empty($gender)){
		 $error[]="Gender field blank!";
		}
	if(empty($father)){
		 $error[]="Father's Name blank!";
		 }
	if(empty($foccupation)){
		 $error[]="Father's Occupation blank!";
		 }
	if(empty($mother)){
		 $error[]="Mother's Name blank!";
		 }
	if(empty($moccupation)){
		 $error[]="Mother's Occupation blank!";
		 }
	if(!($error)){
		
		insertPersonalData($lname, $fname, $year, $ward, $village, $location, $sublocation, $gender, $dob, $father, $foccupation, $mother, $moccupation, $phone);		
	    //header("Location:academia.php?id=".$_GET['id']);
    }
 }

?>
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
              <!--  <form action="#" method="post">
                    <input type="text" value="Search on this website" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                  	<input type="submit" name="Search" value="" id="searchbutton" title="Search" />
                </form>-->
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
			<div>
			<ul style="display:display-block;">
				<li style="display:inline;"><a href="personaldata.php">Personal data</a></li>|
                <li style="display:inline;"><a href="academia.php" class="academia.php">Academia</a></li>|
                <li style="display:inline;"><a href="bursaries.php">Bursary</a></li>|
                <li style="display:inline;"><a href="applicationstatus.php">Application Status</a></li>|                
            </ul>
			</div>
        	<div class="content_box">
				<form id="form" name="form" method="post" action="personaldata.php">
				<p><b style="position:relative;left:2%;display:inline;">Last Name:</b><input type="text" name="lname" required="required"></p>
				<p><b style="position:relative;left:2%;display:inline;">First Name:</b><input type="text" name="fname"></p>
				<p><b style="position:relative;left:2%;display:inline;">Year:</b><input type="text" name="year"></p>				
				<p><b style="position:relative;left:2%;display:inline;">Ward:</b><input type="text" name="ward"></p>
				<p><b style="position:relative;left:2%;display:inline;">Village:</b><input type="text" name="village"></p>
				<p><b style="position:relative;left:2%;display:inline;">Location:</b><input type="text" name="location"></p>
				<p><b style="position:relative;left:2%;display:inline;">Sub-location:</b><input type="text" name="sublocation"></p>
				<p><b style="position:relative;left:2%;display:inline;">Gender:</b><input type="text" name="gender"></p>
				<p><b style="position:relative;left:2%;display:inline;">Date of Birth:</b><input type="text" name="dob" ></p>
				<p><b style="position:relative;left:2%;display:inline;">Father:</b><input type="text" name="father"></p>
				<p><b style="position:relative;left:2%;display:inline;">Father's Occupation:</b><input type="text" name="foccupation"></p>
				<p><b style="position:relative;left:2%;display:inline;">Mother:</b><input type="text" name="mother"></p>
				<p><b style="position:relative;left:2%;display:inline;">Mother's Occupation:</b><input type="text" name="moccupation"></p>
				<p><b style="position:relative;left:2%;display:inline;">Phone:</b><input type="text" name="phone"></p>
				<p><input type="submit" name="submit" value="Enter"/></p>
                </form> 
				
			</div>
        </div>
        
        <div id="templatemo_sidebar">
        
        	<div id="news_box">
                       
                <ul>
                	<li>
                        <h6><a href="#">County News</a></h6>
                        <p>You may check out the latest county developments at <a href="" rel="nofollow">Messages</a>  for this page.</p>
                    </li>
                    
                    <li>
                        <h6><a href="#">MP's Whereabouts</a></h6>
                        <p>The recent tour to the Matunda sub-county hospital saw many appraisal with messages of its expansion to include a morgue facility. This would offer an avenue even for the local students at medical schools to undertake their internships and produce quality staff</p>
                    </li>
                    
                    <li class="last">
                        <h6><a href="#">The County Mission and Vision</a></h6>
                        <p>To be leading in development and making the lives of the constituent members progress. </p>
                    </li>
                    
                </ul>
                <div class="btn_more"><a href="#"><span>+</span> View All Posts</a></div>
                <div class="cleaner"></div>     
            </div>
            
            <div class="sidebar_box">
            	<h2><a href="http://www.onlyimage.com" title="Only Image"  class="sidebar_box_h2" target="_blank">Testimonial</a></h2>
                <blockquote>
                    <p align="justify">Through the county bursary scheme now I can comfortably finish my undergraduate and look forward to give back my greatest support to the Likuyani county. thanks to its able leaders.</p>
                    
                    <cite>David Musomi- <span><a href="portfolio.html">Student K.U.</a></span></cite>
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

