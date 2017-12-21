<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	//new
	$eligibility = $_POST['eligibility'];
	$rating = $_POST['rating'];
	$date = $_POST['date'];
	$place = $_POST['place'];
	$licenseno = $_POST['licenseno'];
	$validity = $_POST['validity'];
	
	mysqli_query($con,"INSERT INTO civil(faculty_id,eligibility,rating,date_taken,place,licenseno,validity) VALUES('$id','$eligibility','$rating','$date','$place','$licenseno','$validity')")or die(mysqli_error($con)); 
	
	echo "<script>document.location='eligibility.php'</script>";   
?>	