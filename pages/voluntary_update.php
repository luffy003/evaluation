<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];

	$from = $_POST['from'];
	$to = $_POST['to'];
	$position = $_POST['position'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$hours = $_POST['hours'];
	$date=date('Y-m-d');
	$cid = $_POST['id'];
	$i=0;
	foreach($cid as $value)
	{
	
		mysqli_query($con,"update voluntary set voluntary_start='$from[$i]',voluntary_end='$to[$i]',voluntary_position='$position[$i]',org_name='$name[$i]',org_address='$address[$i]',hours='$hours[$i]' where voluntary_id='$value'")or die(mysqli_error($con));  

		$i++;
	}
	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script>document.location='voluntary.php'</script>";   
?>	