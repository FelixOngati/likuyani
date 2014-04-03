<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?
include_once("function.php");

extract($_POST);
if(isset($submit)){
	$error=array();
	$subject=trim($subject);
	$description=trim($description);
	if(empty($subject)){
		 $error[]="Title blank!";
		 }
	if(empty($description)){
		 $error[]="Description blank!";
		 }
	if(!isset($error)){
		insertNewDevelopment($subject, $description);
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
	<h3>Update new development Here</h3>
    	<div id="templatemo_main_content">
			<form action="" method="post">
        	<div class="content_box">            
              <p align="left">Title<textarea name="subject" style="float:right;right:3%; postition:absolute"  cols="35"></textarea><em></em></p>
                <p align="justify"></p>
                <p align="justify"></p>
				<p align="justify"></p>
				<p align="justify"></p>
				<p align="justify">&nbsp;</p>
				<p align="justify">&nbsp;</p>
				<p align="justify">&nbsp;</p>
			</div>
            
            <div class="content_box last_box">
            	<p align="left">Description<textarea name="description" style="float:right; postition:absolute" cols="35" rows="5" ></textarea><em></em></p>
                <p align="justify"></p>
				<p align="justify">&nbsp;</p>
				<p align="justify">&nbsp;</p>
            </div>
			<input type="submit" name="submit" value ="Submit">
					
			</form>
        </div>
        
        <div id="templatemo_sidebar">
           	<!--This empty space could be used to place an image or call flash objects-->
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

