<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php include_once("init.php");
	      include_once("function.php");?>
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
				<?php 
				   $profile = get_data($_GET['id']);
				   foreach($profile as $data){ ?>
				   <p>First Name: <?php echo $data["fName"];?></p>
				   <p>Last Name: <?php echo $data["lName"];?></p>
				   <p>Year: <?php echo $data["year"];?></p>
				   <p>Ward: <?php echo $data["ward"];?></p>
				   <p>Village: <?php echo $data["village"];?></p>
				   <p>Location: <?php echo $data["location"];?></p>
				   <p>Sub-location: <?php echo $data["sublocation"];?></p>
				   <p>Sex: <?php echo $data["sex"];?></p>
				   <p>Date of Birth: <?php echo $data["dob"];?></p>
				   <p>Father: <?php echo $data["father"];?></p>
				   <p>Occupation: <?php echo $data["foccupation"];?></p>
				   <p>Mother: <?php echo $data["mother"];?></p>
				   
				   <?php } ?>
				   
				<!--<table><tr><td>Last Name </td>&nbsp;&nbsp;
				<td>First Name </td><td></td>&nbsp;&nbsp;
				<td>Other Name </td><td></td>&nbsp;&nbsp;
				</tr>				
				<tr><td>Bursary ID:</td> <td></td></tr><br/>
				<tr><td>Amount awarded:</td> <td></td></tr><br/>
				<tr><td>Institution:</td> <td></td></tr><br/>
				</table><br/>-->
			</div>
        
        </div>
        
        <div id="templatemo_sidebar">
        
        	<div id="news_box">
                
                <h2>Latest Updates</h2>
                        
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

