<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
     $id = $_POST['id'];
 $description = $_POST['collegeGroup'];

 mysqli_query($con,"UPDATE college_group SET college_group_description='$description' where college_group_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated college group!');</script>";
	echo "<script>document.location='collegegroup.php'</script>";
 } 


?>