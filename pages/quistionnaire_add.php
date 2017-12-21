<?php 
session_start();
include('../includes/dbcon.php');

	$skill = $_POST['skill'];
	
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO skill(faculty_id,skill) 
		VALUES('$id','$skill')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added skill/hobby!');</script>";
	echo "<script>document.location='skills.php'</script>";   

?>