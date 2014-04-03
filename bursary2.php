<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  include_once("function.php");
  extract($_POST);
if(isset($submit1)){
	$error1=array();
	 $lname=trim($lname);
	 $fname=trim($fname);
	 $year=trim($year);
	 $institution=trim($institution);
	 $admno=trim($admno);
	 $class=trim($class);
	 
	 if(empty($lname)){
		 $error1[]="Last Name blank!";
		 }
	if(empty($fname)){
		 $error1[]="First Name blank!";
		 }
	if(empty($year)){
		 $error1[]="Year field blank!";
		 }
	if(empty($institution)){
		 $error1[]="Institution field blank!";
		 }
	if(empty($admno)){
		 $error1[]="Admission Number blank!";
		 }
	if(empty($class)){
		 $error1[]="Class field blank!";
		 }
    if(!($error1)){
		insertacademia($lname,$fname,$year,$institution,$admno,$class);
	}
}
if(isset($submit2)){	
	$id = fetchid();
	$pId = $id[0]["pId"];
	$error2=array();
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

	if(empty($year)){
		 $error2[]="Year field blank!";
		 }
	if(empty($ward)){
		 $error2[]="Ward field blank!";
		 }
	if(empty($village)){
		 $error2[]="Village field blank!";
		 }
	if(empty($location)){
		 $error2[]="Location field blank!";
		 }
	if(empty($sublocation)){
		 $error2[]="Sublocation blank!";
		 }
	if(empty($gender)){
		 $error2[]="Gender field blank!";
		}
	if(empty($father)){
		 $error2[]="Father's Name blank!";
		 }
	if(empty($foccupation)){
		 $error2[]="Father's Occupation blank!";
		 }
	if(empty($mother)){
		 $error2[]="Mother's Name blank!";
		 }
	if(empty($moccupation)){
		 $error2[]="Mother's Occupation blank!";
		 }
	if(empty($error2)){
		
		$try=insertPersonalData($pId,$year, $ward, $village, $location, $sublocation, $gender, $dob, $father, $foccupation, $mother, $moccupation, $phone);	
		allocationStatusDefault($pId);
    }
}
if(isset($submit3)){
	 $id = fetchid();
	 $pId = $id[0]["pId"];
	 $error3=array();
	 $bursary=trim($bursary);
	 $dateAwarded=trim($dateAwarded);
	 $amount=trim($amount);
	 
	 if(empty($bursary)){
		 $error3[]="Bursary Type blank!";
		 }
	if(empty($dateAwarded)){
		 $error3[]="Date Awarded blank!";
		 }
	if(empty($amount)){
		 $error3[]="Amount Awarded blank!";
		 }
	if(!($error3)){
		insertPreviousAllocations($pId,$bursary,$dateAwarded,$amount);
	}
		 
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>likuyani constituency</title>
<meta name="keywords" content="likuyani constituency, county, bursary, application, development" />
<meta name="description" content="Likuyani constituency - profile." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />

<!--////// END  \\\\\\\-->

        <!-- Site JavaScript -->
        <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
        <script type="text/javascript">
            $(function() {
            $('#one').ContentSlider({
            width : '960px',
              height : '600px',
          speed : 400,
            easing : 'easeOutSine'
            });
            });
        </script>
        <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
        <script src="js/chili/recipes.js" type="text/javascript"></script>
        
<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->

<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>
<body> 
<div id="templatemo_header_wrapper">
    <div id="templatemo_header">
        <div id="site_title">
            <a href="http://www.templatemo.com" rel="nofollow">Likuyani Constituency<span>.</span></a>
        </div> <!-- end of site_title -->
        <div id="templatemo_menu">
            <ul>
                <li><a href="adminhomepage.php">Back</a></li>
                <li><a href="index.php">Home</a></li>                
                <li><a href="blog.html">About Us</a></li>
                <li class="last"><a href="contact.html">Contact</a></li>
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
</div>
<div id="templatemo_wrapper">
    <div id="templatemo_portfolio">
    
    <div id="one" class="contentslider">
            <div class="cs_wrapper">
                <div class="cs_slider">
                
                    <div class="cs_article">
                        <div class="cs_article_inner">
							<div class="left">
					<!--for the section below this enter a Descriptive form title-->
                        <h2>Identification</h2>
                        </div>
                            <div id="1" class="right">
								<div class="content_box">
							       <form method="post" action="">
								   <p><b style="position:relative;left:2%;display:inline;">First Name:</b><input type="text" name="fname" ></p>
								   <p><b style="position:relative;left:2%;display:inline;">Last Name:</b><input type="text" name="lname" ></p>
							       <p><b style="position:relative;left:2%;display:inline;">Institution:</b><input type="text" name="institution" ></p>
							       <p><b style="position:relative;left:2%;display:inline;">Class/Level:</b><input type="text" name="class" ></p>
							       <p><b style="position:relative;left:2%;display:inline;">Academic Year:</b><input type="text" name="year" ></p>
							       <p><b style="position:relative;left:2%;display:inline;">Admission Number:</b><input type="text" name="admno"></p>
							       <p><input name="submit1" type="submit" value="Enter"/></p>
							       </form> 							
							    </div>                                           
                            </div>
                        </div>                               
                    </div><!-- End cs_article -->
                    
                    <div class="cs_article">
                    <div class="cs_article_inner">
                    <div class="left">
					<!--for the section below this enter an h2 element showing the title-->
                        <h2>Personal Information</h2>
                        </div>
                        <div id="2" class="right">
                            <div class="content_box" >
								<form method="post" action="">
									<?php
	                                   if(isset($error2) && !empty($error2)){
	                                   echo "<ul><li>",implode("</li><li>",$error2),"</li></ul>";
	                                   }
	                                ?>
								<p><b style="position:relative;left:2%;display:inline;">Year:</b><input type="text" name="year" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Ward:</b><input type="text" name="ward" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Village:</b><input type="text" name="village" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Location:</b><input type="text" name="location" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Sub-location:</b><input type="text" name="sublocation" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Sex:</b><input type="text" name="gender" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Date of Birth:</b><input type="text" name="dob" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Father:</b><input type="text" name="father" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Father's Occupation:</b><input type="text" name="foccupation" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Mother:</b><input type="text" name="mother" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Mother's Occupation:</b><input type="text" name="moccupation" ></p>
								<p><b style="position:relative;left:2%;display:inline;">Phone Number:</b><input type="text" name="phoneNumber" ></p>
								<p><input name="submit2" type="submit" value="Enter"/></p>
								</form>
								</div>                  
                        </div>
                        
                        </div>
                    </div><!-- End cs_article -->
                    
                    <div class="cs_article">
                    <div class="cs_article_inner">
                    <div class="left">
					<!--For the section below enter a value to display the title for the previous allocations-->
                        <h2>Previous Allocations</h2>
                        </div>
                        <div id="3" class="right">
							<div class="content_box">
							<form method="post" action="">
							<p><b style="position:relative;left:2%;display:inline;">Bursary Type:</b><input type="text" name="bursary" ></p>
							<p><b style="position:relative;left:2%;display:inline;">Date Awarded:</b><input type="text" name="dateAwarded" ></p>
							<p><b style="position:relative;left:2%;display:inline;">Amount:</b><input type="text" name="amount" ></p>
							<p><input name="submit3" type="submit" value="Enter"/></p>
							</form> 
							</div>
                        </div>                        
                        </div>
                    </div><!-- End cs_article -->                  
                                  
                </div><!-- End cs_slider -->
            </div><!-- End cs_wrapper -->
        </div><!-- End contentslider -->
        

        <div class="cleaner"></div>
   
    </div> <!-- end of slider -->
    <div id="templatemo_content_bottom"></div>
    
    <div id="templatemo_footer">

        Copyright <span>©</span> 2014 <a href="#">Likuyani Constituency</a> | Designed by <a href="http://www.eflix.com" rel="nofollow" target="_parent">E-Flix Inc.</a>
    
    </div> <!-- end of templatemo_footer -->
     
</div> <!-- end of wrapper -->


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>

