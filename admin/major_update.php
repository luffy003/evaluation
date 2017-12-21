<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $major = $_POST['major'];

 mysqli_query($con,"UPDATE major SET major='$major' where major_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated major!');</script>";
	echo "<script>document.location='major.php'</script>";
 } 

