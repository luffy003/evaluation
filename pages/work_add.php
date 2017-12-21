<?php 
session_start();
include('../includes/dbcon.php');

	$from = $_POST['from'];
	$to = $_POST['to'];
	$position = $_POST['position'];
	$agency = $_POST['agency'];
	$salary = $_POST['salary'];
	$grade = $_POST['grade'];
	$status = $_POST['status'];
	$govt = $_POST['govt'];
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO work_exp(faculty_id,work_start,work_end,position,agency,salary,grade,appoint_status,govt) 
		VALUES('$id','$from','$to','$position','$agency','$salary','$grade','$status','$govt')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added work experience!');</script>";
	echo "<script>document.location='work_exp.php'</script>";   

?>