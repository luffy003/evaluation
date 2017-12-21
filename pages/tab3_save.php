<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];
	//$id=7;

if(isset($_POST['education']))
{
	$school = $_POST['school'];
	$level = $_POST['level'];
	$grad = $_POST['year'];
	
	$i=0;
	foreach ($school as $s)
	{

		mysqli_query($con,"INSERT INTO educ(level,school,grad,faculty_id) VALUES('$level[$i]','$s','$grad[$i]','$id')")or die(mysqli_error($con)); 
		$i++;
	}
	echo "<script>document.location='profile.php'</script>";   
}	
?>