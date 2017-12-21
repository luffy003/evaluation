<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];
	//$id=7;

if(isset($_POST['profile']))
{
	$gender = $_POST['gender'];
	$civil = $_POST['civil'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$blood_type = $_POST['blood_type'];
	$pob = $_POST['pob'];
	//$religion = $_POST['religion'];
	$citizenship = $_POST['citizenship'];
	//$address = $_POST['address'];
	//$email = $_POST['email'];
	//$contact = $_POST['contact'];
	

	mysqli_query($con,"update faculty set gender='$gender',civil='$civil',height='$height',weight='$weight',pob='$pob',citizenship='$citizenship',blood_type='$blood_type' where faculty_id='$id'")or die(mysqli_error($con));  
	//echo "<script type='text/javascript'>alert('Successfully updated personal details!');</script>";
	echo "<script>document.location='profile_wizard2.php'</script>";   
}	



?>