<?php 
session_start();
error_reporting(0);
include('../includes/dbcon.php');
	$fid = $_POST['fid'];
	$last = $_POST['last'];
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$relationship = $_POST['relationship'];
	$ext = $_POST['ext'];
	$id=$_SESSION['id'];	
	
	$queryf=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='$relationship'")or die(mysqli_error($con));
	$count=mysqli_num_rows($queryf);

	if ($count >0)
	{
		echo "<script type='text/javascript'>alert('Parent already added!');</script>";
		echo "<script>document.location='family.php'</script>"; 
	}
	else
	{
		mysqli_query($con,"INSERT INTO family(faculty_id,last,first,middle,ext,relationship) VALUES('$id','$last','$first','$middle','$ext','$relationship')")or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated spouse/child details!');</script>";
		echo "<script>document.location='family.php'</script>"; 
	}	
	
	
?>