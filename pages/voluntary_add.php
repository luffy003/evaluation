<?php 
session_start();
include('../includes/dbcon.php');

	$from = $_POST['from'];
	$to = $_POST['to'];
	$position = $_POST['position'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$hours = $_POST['hours'];
	$id=$_SESSION['id'];

		mysqli_query($con,"INSERT INTO voluntary(faculty_id,voluntary_start,voluntary_end,voluntary_position,org_name,org_address,hours) 
		VALUES('$id','$from','$to','$position','$name','$address','$hours')")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully added voluntary works!');</script>";
	echo "<script>document.location='voluntary.php'</script>";   

?>