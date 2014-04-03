<?php
include_once("init.php");
function search($institution,$id){
	$profiledata=array();
	$query="SELECT * FROM academia WHERE (institution LIKE '%".$institution."%') AND (admNo LIKE '%".$admNo."%')";
	$query=mysql_query($query);
	echo mysql_error();
	
    while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}
function get_names($id){
	$profiledata=array();
	$query="SELECT * FROM personaldata WHERE pId='$id'";
	$query=mysql_query($query);
	echo mysql_error();
	
    while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}

function get_academia($id){
	$profiledata=array();
	$query="SELECT * FROM academia WHERE pId='$id'";
	$query=mysql_query($query);
	echo mysql_error();
	
    while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}

function get_data($id){
	$profiledata=array();
	$query="SELECT * FROM personaldata WHERE pId='$id'";
	$query=mysql_query($query);
	echo mysql_error();
	
    while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}

function insertApplicationStatus($amountawarded, $applicationstatus, $bursary){
	$amountawarded=mysql_real_escape_string($amountawarded);
	$applicationstatus=mysql_real_escape_string($applicationstatus);
	$bursary=mysql_real_escape_string($bursary);
	
	
	$query="INSERT INTO applicationstatus (pId,amountAwarded,applicationStatus,bursary)
	         VALUES('$amountawarded','$applicationstatus','$bursary')";
	$query=mysql_query($query);
}

function insertacademia($lname,$fname,$year,$institution,$admno,$class){
	$lname=mysql_real_escape_string($lname);
	$fname=mysql_real_escape_string($fname);
	$year=mysql_real_escape_string($year);
	$institution=mysql_real_escape_string($institution);
	$admno=mysql_real_escape_string($admno);
	$class=mysql_real_escape_string($class);
	
	$query="INSERT INTO academia (lName,fName,year, institution,admNo,class)
	         VALUES('$lname','$fname','$year','$institution','$admno','$class')";
	$query=mysql_query($query);
	echo mysql_error();
}

function insertPersonalData($pId,$year, $ward, $village, $location, $sublocation, $gender, 
                            $dob, $father, $foccupation, $mother, $moccupation, $phone){
								$query="INSERT INTO personaldata (pId,year,ward,village, location, sublocation,sex,dob,
								father,foccupation,mother,moccupation,phone)
	                            VALUES('$pId','$year', '$ward', '$village', '$location', '$sublocation', '$gender', 
                                '$dob', '$father', '$foccupation', '$mother', '$moccupation', '$phone')";
	                            $query=mysql_query($query);
	                            if(!($query)){
									echo mysql_error();
								}								
							}		
	    
function fetchid(){
	$query = "SELECT pId FROM academia ORDER BY pId DESC LIMIT 1";
	$query = mysql_query($query);
	while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}

function insertPreviousAllocations($pId,$bursary,$dateAwarded,$amount){
	$bursary=mysql_real_escape_string($bursary);
	$dateAwarded=mysql_real_escape_string($dateAwarded);
	$amount=mysql_real_escape_string($amount);
	
	$query="INSERT INTO previousallocations (pId,bursary,dateAwarded,amount)
	         VALUES('$pId','$bursary','$dateAwarded','$amount')";
	$query=mysql_query($query);
}

function allocationStatusDefault($pId){
	    $busary = "Constuency Development Fund";
	    $applicationStatus = "Applied";	    
		$query=("INSERT INTO applicationstatus SET pId='$pId',
	        dateApplied=NOW(),
	        bursary='$bursary',
	        applicationStaus='$applicationStatus'");
	    $query = mysql_query($query);
}

function insertSlideImage($imagename,$description){
	$description = trim($description);
	$query  = ("INSERT INTO homepagephotos SET pname='$imagename', pdescription='$description'");
	$query = mysql_query($query);
	if(!($query)){
		echo mysql_error();
			}		
}
function getSlidingPhotos(){
	$query = "SELECT * FROM homepagephotos ORDER BY photoId DESC LIMIT 4";
	$query = mysql_query($query);
	while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}
function getNewDevelopments(){
	$query = "SELECT * FROM updates ORDER BY updateId DESC LIMIT 6";
	$query = mysql_query($query);
	while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}
function insertNewDevelopment($subject, $description){
	$subject = mysql_real_escape_string($subject);
	$description = mysql_real_escape_string($description);
	$date = NOW();
	$query  = ("INSERT INTO updates SET title='$subject', update='$description', date='$date'");
	mysql_query($query);
	if(!$query){
	echo mysql_error();
}
}
function search_pdata($institution,$id){
	$profiledata=array();
	$query="SELECT a.lName,a.fName,a.pId,b.sex,b.dob 
	        FROM academia a, personaldata b
	        WHERE (a.institution LIKE '%".$institution."%') AND 
	        (a.admNo LIKE '%".$admNo."%') AND (a.pId = b.pId)";
	$query=mysql_query($query);
	echo mysql_error();
	
    while($row=mysql_fetch_assoc($query)){
      $profiledata[]=$row;
	
  }
  return $profiledata;
}

function search_paddress($pId){
	$pId = mysql_real_escape_string($pId);
	$query = "SELECT ward, village, location, sublocation, phone FROM personaldata WHERE pId = '$pId'";
	$query = mysql_query($query);
	while($address = mysql_fetch_assoc($query)){
		$addresses[] = $address;
	}
	return $addresses;
}
function search_pacademic($pId){
	$pId = mysql_real_escape_string($pId);
	$query = "SELECT institution, class, year, admNo FROM academia WHERE pId = '$pId'";
	$query = mysql_query($query);
	while($academic = mysql_fetch_assoc($query)){
		$academics[] = $academic;
	}
	return $academics;
}

function search_pparents($pId){
	$pId = mysql_real_escape_string($pId);
	$query = "SELECT father, foccupation, mother, moccupation FROM personaldata WHERE pId = '$pId'";
	$query = mysql_query($query);
	while($parent = mysql_fetch_assoc($query)){
		$parents[] = $parent;
	}
	return $parents;
}
function search_pallocations($pId){
	$pId = mysql_real_escape_string($pId);
	$query = "SELECT * from previousallocations WHERE pId = '$pId'";
	$query = mysql_query($query);
	while($allocation = mysql_fetch_assoc($query)){
		$allocations[] = $allocation;
	}
	return $allocations;
}
