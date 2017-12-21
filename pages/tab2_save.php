<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];
//	$id=7;

if(isset($_POST['contact']))
{
	$flast = $_POST['flast'];
	$ffirst = $_POST['ffirst'];
	$fmiddle = $_POST['fmiddle'];
	$mlast = $_POST['mlast'];
	$mfirst = $_POST['mfirst'];
	$mmiddle = $_POST['mmiddle'];

	mysqli_query($con,"INSERT INTO family(faculty_id,last,first,middle,relationship) VALUES('$id','$flast','$ffirst','$fmiddle','Father')")or die(mysqli_error($con));  

	mysqli_query($con,"INSERT INTO family(faculty_id,last,first,middle,relationship) VALUES('$id','$flast','$ffirst','$fmiddle','Mother')")or die(mysqli_error($con));  

	
	echo "<script>document.location='profile_wizard3.php'</script>";   
}	
?>