<?php 
session_start();
include('../includes/dbcon.php');
	$middle = $_POST['middle'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$ext = $_POST['ext'];
	$gender = $_POST['gender'];
	$civil = $_POST['civil'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$blood_type = $_POST['blood_type'];
	$pob = $_POST['pob'];
	$bday = $_POST['bday'];
	$citizenship = $_POST['citizenship'];
	$id=$_SESSION['id'];
	$date=date('Y-m-d');
	
	mysqli_query($con,"update faculty set faculty_last='$last',faculty_first='$first',faculty_middle='$middle',faculty_ext='$ext',gender='$gender',civil='$civil',height='$height',weight='$weight',pob='$pob',citizenship='$citizenship',blood_type='$blood_type',bday='$bday' where faculty_id='$id'")or die(mysqli_error($con));  

	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script type='text/javascript'>alert('Successfully updated personal details!');</script>";
	echo "<script>document.location='profile.php'</script>";   
	
	
?>