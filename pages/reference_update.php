<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$date=date('Y-m-d');
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update reference set reference_name='$name[$i]',reference_address='$address[$i]',reference_contact='$contact[$i]' where reference_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='skills.php'</script>";   
?>	