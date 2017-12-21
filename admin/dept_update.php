<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $title = $_POST['title'];

 mysqli_query($con,"UPDATE department SET department_title='$title' where department_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated department!');</script>";
	echo "<script>document.location='department.php'</script>";
 } 


?>