<?php 

include('../dist/includes/dbcon.php');

        $description = $_POST['collegeGroup'];

	mysqli_query($con,"INSERT INTO college_group(college_group_description) VALUES('$description')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new college group!');</script>";
	echo "<script>document.location='collegegroup.php'</script>";   
	
	
?>