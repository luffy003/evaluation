<?php 

include('../dist/includes/dbcon.php');

	$code = $_POST['departmentCode'];
        $title = $_POST['departmentTitle'];

	mysqli_query($con,"INSERT INTO department(department_code,department_title) VALUES('$code','$title')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new department!');</script>";
	echo "<script>document.location='department.php'</script>";   
	
	
?>