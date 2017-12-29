<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $code = $_POST['departmentCode'];
 $title = $_POST['departmentTitle'];

 mysqli_query($con,"UPDATE department SET department_title='$title' where department_code='$code'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated department!');</script>";
	echo "<script>document.location='department.php'</script>";
 } 


?>