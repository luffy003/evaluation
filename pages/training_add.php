<?php 
session_start();
include('../includes/dbcon.php');

	$from = $_POST['from'];
	$to = $_POST['to'];
	$training = $_POST['training'];
	$sponsor = $_POST['sponsor'];
	$hours = $_POST['hours'];
	$type = $_POST['type'];
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO training(faculty_id,training_start,training_end,training,training_hours,type,sponsor) 
		VALUES('$id','$from','$to','$training','$hours','$type','$sponsor')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added training!');</script>";
	echo "<script>document.location='training.php'</script>";   

?>