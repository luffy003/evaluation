<?php 
session_start();
include('../includes/dbcon.php');

	$membership = $_POST['membership'];
	
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO membership(faculty_id,membership_org) 
		VALUES('$id','$membership')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added membership!');</script>";
	echo "<script>document.location='skills.php'</script>";   

?>