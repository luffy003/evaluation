<?php 
session_start();
include('../includes/dbcon.php');

	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO reference(faculty_id,reference_name,reference_address,reference_contact) 
		VALUES('$id','$name','$address','$contact')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added reference!');</script>";
	echo "<script>document.location='skills.php'</script>";   

?>