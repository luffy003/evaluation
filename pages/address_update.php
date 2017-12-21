<?php 
session_start();
include('../includes/dbcon.php');

	$raddress = $_POST['raddress'];
	$rzip = $_POST['rzip'];
	$rtel = $_POST['rtel'];
	$paddress = $_POST['paddress'];
	$pzip = $_POST['pzip'];
	$ptel = $_POST['ptel'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$gsis = $_POST['gsis'];
	$pagibig = $_POST['pagibig'];
	$philhealth = $_POST['philhealth'];
	$sss = $_POST['sss'];
	$tin = $_POST['tin'];
	$id=$_SESSION['id'];
	$date=date('Y-m-d');
	
	mysqli_query($con,"update faculty set res_address='$raddress',res_zip='$rzip',res_tel='$rtel',perm_address='$paddress',perm_zip='$pzip',perm_tel='$ptel',email='$email',contact='$contact',gsis='$gsis',pagibig='$pagibig',philhealth='$philhealth',sss='$sss',tin='$tin' where faculty_id='$id'")or die(mysqli_error($con));

	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  


	echo "<script type='text/javascript'>alert('Successfully updated contact details!');</script>";
	echo "<script>document.location='profile.php'</script>";   
	
	
?>