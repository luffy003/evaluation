<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$from = $_POST['from'];
	$to = $_POST['to'];
	$position = $_POST['position'];
	$agency = $_POST['agency'];
	$salary = $_POST['salary'];
	$grade = $_POST['grade'];
	$status = $_POST['status'];
	$govt = $_POST['govt'];
	$date=date('Y-m-d');
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update work_exp set work_start='$from[$i]',work_end='$to[$i]',position='$position[$i]',agency='$agency[$i]',salary='$salary[$i]',grade='$grade[$i]',appoint_status='$status[$i]',govt='$govt[$i]' where work_exp_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='work_exp.php'</script>";   
?>	