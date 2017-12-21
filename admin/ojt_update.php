<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $last = ucwords($_POST['last']);
 $first = ucwords($_POST['first']);
 $bday = $_POST['bday'];
 $major = $_POST['major'];
 	
	 mysqli_query($con,"UPDATE faculty SET faculty_last='$last',faculty_first='$first',bday='$bday',major_id='$major' where faculty_id='$id'")
	 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated faculty student details!');</script>";
	echo "<script>document.location='faculty.php'</script>";
  
 }
