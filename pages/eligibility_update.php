<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	//new
	$eligibility = $_POST['eligibility'];
	$rating = $_POST['rating'];
	$date = $_POST['date'];
	$place = $_POST['place'];
	$licenseno = $_POST['licenseno'];
	$validity = $_POST['validity'];
	$date=date('Y-m-d');
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update civil set eligibility='$eligibility[$i]',rating='$rating[$i]',date_taken='$date[$i]',place='$place[$i]',licenseno='$licenseno[$i]',validity='$validity[$i]' where civil_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='eligibility.php'</script>";   
?>	