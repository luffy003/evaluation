<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$recognition = $_POST['recognition'];
	$cid = $_POST['id'];
	$date=date('Y-m-d');
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update recognition set recognition='$recognition[$i]' where recognition_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='skills.php'</script>";   
?>	