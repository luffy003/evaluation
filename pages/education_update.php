<?php 
session_start();
include('../includes/dbcon.php');

	$elem = $_POST['elem'];
	$high = $_POST['high'];
	$college = $_POST['college'];
	$date=date('Y-m-d');
	
	$id=$_SESSION['id'];
	
	//mysqli_query($con,"INSERT INTO educ_back(past_college,highschool,elementary,faculty_id) VALUES('$college','$high','$elem','$id')")or die(mysqli_error($con));  
	 mysqli_query($con,"UPDATE educ_back SET past_college='$college',highschool='$high',elementary='$elem' where faculty_id='$id'")
 or die(mysqli_error());

 	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	

	echo "<script type='text/javascript'>alert('Successfully updated education details!');</script>";
	echo "<script>document.location='profile.php'</script>";   
	
	
?>