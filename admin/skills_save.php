<?php 

include('../dist/includes/dbcon.php');

	$skill = $_POST['skill'];

	mysqli_query($con,"INSERT INTO skill(skill) VALUES('$skill')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new skill!');</script>";
	echo "<script>document.location='skill.php'</script>";   
	
	
?>