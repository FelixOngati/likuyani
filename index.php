<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once("function.php");
$slidingphotos = getSlidingPhotos(); 
$updates = getNewDevelopments();
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
                <li><a href="checkstatus.php">Bursary</a></li>
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
    <div id="slider_wrapper">
        <div id="slider" >
			<?php
			foreach($slidingphotos as $data){
			?>
            <a href="#"><img src="images/gallery/<?php echo $data["pname"];?>" alt="01" title="<?php echo $data["pdescription"];?>" /></a>
            <?php
		     }
            ?>
        </div>
    </div> <!-- end of flash -->
    

    <div id="templatemo_content">
    	<div id="templatemo_main_content">
        
        	<div class="content_box">
                <h2>Welcome to Likuyani Constituency </h2>
                <!--<div class="image_wrapper image_fl"><img src="images/templatemo_image_01.jpg" alt="image" /></div>-->
              
              <p align="justify"><em>Likuyani constituency is a sub-county of Kakamega county. it is bordered by Uasin gishu county to the East. and it is the leading in developmental agenda.</em></p>
                <p align="justify">The recent establishment of expanding the matunda sub-county project shown as <a href="idex.html" rel="nofollow" target="_matundasub_county_hos">project</a> is kicking. You may Check its progress and its current status and pictures at <a href="http://www.photovaco.com" target="_blank">Photos</a> for photos.   Check also the various department in the hospitals link at <a href="#">Hospitals</a> </p>
                <div class="btn_more"><a href="#"><span>+</span> Read More</a></div>
			</div>
            
            <div class="content_box last_box">
            	<h2>New Developments</h2>
                <p align="justify">over the recent past, the following have ensued in our great county. check and see if you are updated </p>
                <ul class="tmo_list">
					<?php
					foreach($updates as $data){
					?>
                    <li><a href=""><?php echo $data["subject"];?></a></li>
                    <!--<li>MP's tour and visit at the Matunda sub-district hospital</li>
                    <li>Commisioning of the Kongoni sub-county offices</li>
                    <li>Establishment of an online bursary application portal</li>
                    <li>Vetting of the new bursary committee members</li>
                    <li>Construction of the constituency site</li>-->
                    <?php 
				     }
                    ?>
                </ul>
                <div class="btn_more"><a href="#"><span>+</span> Read More</a></div>
            </div>

        </div>
        
        <div id="templatemo_sidebar">
           	<div id="news_box">           
         
                <ul>                   
                    <li>
                        <h6><a href="#">Message from the MP</a></h6>
                        <p id="message"><img src="images/gallery/mp_photo.jpeg" alt="mp passport" height="160px" width="170px" align="left"></p>
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

