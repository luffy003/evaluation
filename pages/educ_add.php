<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	//new
	$level = $_POST['level'];
	$school = $_POST['school'];
	$grad = $_POST['grad'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$course = $_POST['course'];
	$level_units = $_POST['level_units'];
	$honors = $_POST['honors'];

	mysqli_query($con,"INSERT INTO educ(faculty_id,level,school,grad,at_from,at_to,course,level_units,honors) VALUES('$id','$level','$school','$grad','$from','$to','$course','$level_units','$honors')")or die(mysqli_error($con)); 
	
	echo "<script>document.location='educ.php'</script>";   
?>	