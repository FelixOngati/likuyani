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
