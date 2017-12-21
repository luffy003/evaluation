<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $title = $_POST['title'];

 mysqli_query($con,"UPDATE dept SET dept='$title' where dept_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated department!');</script>";
	echo "<script>document.location='department.php'</script>";
 } 


?>