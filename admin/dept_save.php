<?php 

include('../dist/includes/dbcon.php');

	$title = $_POST['dept'];

	mysqli_query($con,"INSERT INTO dept(dept) VALUES('$title')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new department!');</script>";
	echo "<script>document.location='department.php'</script>";   
	
	
?>