<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $skill = $_POST['skill'];

 mysqli_query($con,"UPDATE skill SET skill='$skill' where skill_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated skill!');</script>";
	echo "<script>document.location='skills.php'</script>";
 } 

