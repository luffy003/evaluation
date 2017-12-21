<?php 

include('../dist/includes/dbcon.php');

	$major = $_POST['major'];

	mysqli_query($con,"INSERT INTO major(major) VALUES('$major')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new major!');</script>";
	echo "<script>document.location='major.php'</script>";   
	
	
?>