<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	//update
	$school = $_POST['school'];
	$grad = $_POST['grad'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$course = $_POST['course'];
	$level_units = $_POST['level_units'];
	$honors = $_POST['honors'];
	$eid = $_POST['eid'];
	$date=date('Y-m-d');

	$i=0;
	foreach ($eid as $value)
	{

		mysqli_query($con,"update educ set school='$school[$i]',grad='$grad[$i]',course='$course[$i]',at_from='$from[$i]',at_to='$to[$i]',honors='$honors[$i]',level_units='$level_units[$i]' where educ_id='$value'")or die(mysqli_error($con));  
		$i++;


	}

	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='educ.php'</script>";   
	
?>