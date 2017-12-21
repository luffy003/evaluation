<?php 
session_start();
include('../dist/includes/dbcon.php');

$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$incharge = $_POST['incharge'];
	$position = $_POST['position'];
	$department = $_POST['department'];
	
	$id=$_SESSION['id'];
	
	mysqli_query($con,"INSERT INTO agency(agency_name,agency_contact,agency_address,agency_email,person_in_charge,position,dept,faculty_id) 
		VALUES('$name','$contact',$address','$email','$incharge','$position','$department','$id')")or die(mysqli_error($con));  

	$name = $_POST['name'];
	$relation = $_POST['relation'];
	$haddress = $_POST['haddress'];
	$hcontact = $_POST['hcontact'];
	$oaddress = $_POST['oaddress'];
	$ocontact = $_POST['ocontact'];
	
	$id=$_SESSION['id'];
	
	mysqli_query($con,"INSERT INTO contact(contact_name,contact_relation,contact_haddress,contact_hno,contact_oaddress,contact_ono,faculty_id) 
		VALUES('$name','$relation','$haddress','$hcontact','$oaddress','$ocontact','$id')")or die(mysqli_error($con));  
	
	$college = $_POST['college'];
	$high = $_POST['high'];
	$elem = $_POST['elem'];
	$seminars = $_POST['seminars'];
	
	$id=$_SESSION['id'];
	
	mysqli_query($con,"INSERT INTO educ_back(past_college,highschool,elementary,faculty_id) VALUES('$college','$high','$elem','$id')")or die(mysqli_error($con));  

	$language = $_POST['language'];
	$skills = $_POST['skills'];
	$exp = $_POST['exp'];
	$seminars = $_POST['seminars'];
	
	$id=$_SESSION['id'];
	
	foreach ($language as $lang)
	{
		mysqli_query($con,"INSERT INTO faculty_lang(lang_id,faculty_id) VALUES('$lang','$id')")or die(mysqli_error($con));  
	}	
	mysqli_query($con,"INSERT INTO faculty_skill(skills,faculty_id) VALUES('$skills','$id')")or die(mysqli_error($con));  
	foreach ($exp as $ex)
	{
		mysqli_query($con,"INSERT INTO work_exp(work_exp,faculty_id) VALUES('$ex','$id')")or die(mysqli_error($con));  
	}	
	foreach ($seminars as $s)
	{
		mysqli_query($con,"INSERT INTO seminar(seminar,faculty_id) VALUES('$s','$id')")or die(mysqli_error($con));  
	}

	$gender = $_POST['gender'];
	$civil = $_POST['civil'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$blood_type = $_POST['blood_type'];
	$pob = $_POST['pob'];
	$religion = $_POST['religion'];
	$citizenship = $_POST['citizenship'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$sss = $_POST['sss'];
	$tin = $_POST['tin'];
	$mother = $_POST['mother'];
	$moccup = $_POST['moccup'];
	$father = $_POST['father'];
	$foccup = $_POST['foccup'];

	$id=$_SESSION['id'];
	
	mysqli_query($con,"update faculty set gender='$gender',civil='$civil',height='$height',weight='$weight',address='$address'
		,email='$email',contact='$contact',pob='$pob',religion='$religion',citizenship='$citizenship',sss='$sss',tin='$tin',
		blood_type='$blood_type',mother='$mother',moccup='$moccup',father='$father',foccup='$foccup' where faculty_id='$id'")or die(mysqli_error($con));  
	
	$gender = $_POST['gender'];
	$civil = $_POST['civil'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$blood_type = $_POST['blood_type'];
	$pob = $_POST['pob'];
	$religion = $_POST['religion'];
	$citizenship = $_POST['citizenship'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$sss = $_POST['sss'];
	$tin = $_POST['tin'];
	$mother = $_POST['mother'];
	$moccup = $_POST['moccup'];
	$father = $_POST['father'];
	$foccup = $_POST['foccup'];

	$id=$_SESSION['id'];
	
	mysqli_query($con,"update faculty set gender='$gender',civil='$civil',height='$height',weight='$weight',address='$address'
		,email='$email',contact='$contact',pob='$pob',religion='$religion',citizenship='$citizenship',sss='$sss',tin='$tin',
		blood_type='$blood_type',mother='$mother',moccup='$moccup',father='$father',foccup='$foccup' where faculty_id='$id'")or die(mysqli_error($con));  
	echo "<script type='text/javascript'>alert('Successfully updated personal details!');</script>";
	echo "<script>document.location='fill_others.php'</script>";   
	
	
?>