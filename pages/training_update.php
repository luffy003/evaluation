<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$from = $_POST['from'];
	$to = $_POST['to'];
	$training = $_POST['training'];
	$sponsor = $_POST['sponsor'];
	$hours = $_POST['hours'];
	$type = $_POST['type'];
	$cid = $_POST['id'];
	$date=date('Y-m-d');
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update training set training='$training[$i]',training_start='$from[$i]',training_end='$to[$i]',training_hours='$hours[$i]',type='$type[$i]',sponsor='$sponsor[$i]' where training_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='training.php'</script>";   
?>	