<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$membership = $_POST['membership'];
	$cid = $_POST['id'];
	$date=date('Y-m-d');
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update membership set membership_org='$membership[$i]' where membership_id='$value'")or die(mysqli_error($con));  

		$i++;
	}

	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='skills.php'</script>";   
?>	