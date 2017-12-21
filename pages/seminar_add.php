<?php 
session_start();
include('../includes/dbcon.php');

	$seminar = $_POST['seminar'];
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO seminar(faculty_id,seminar) 
		VALUES('$id','$seminar')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added seminar!');</script>";
	echo "<script>document.location='profile.php'</script>";   

?>