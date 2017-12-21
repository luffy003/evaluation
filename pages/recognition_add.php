<?php 
session_start();
include('../includes/dbcon.php');

	$recognition = $_POST['recognition'];
	
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO recognition(faculty_id,recognition) 
		VALUES('$id','$recognition')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added recognition/distinction!');</script>";
	echo "<script>document.location='skills.php'</script>";   

?>