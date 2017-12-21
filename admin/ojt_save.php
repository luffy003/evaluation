<?php 

include('../dist/includes/dbcon.php');
	//$id = $_POST['id'];
	$last = ucwords($_POST['last']);
	$first = ucwords($_POST['first']);
	$bday = $_POST['bday'];
	$major = $_POST['major'];
	$course = "BSIT";
	$sy = $_POST['sy'];
	
	$query=mysqli_query($con,"select * from faculty where faculty_last='$last' and faculty_first='$first'")or die(mysqli_error());
		$count=mysqli_num_rows($query);
		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('faculty Student already registered!');</script>";
			echo "<script>document.location='faculty.php'</script>";  
		}
		else{
			
			
				mysqli_query($con,"INSERT INTO faculty(faculty_last,faculty_first,faculty_pic,bday,major_id,course,sy) 
					VALUES('$last','$first','default.gif','$bday','$major','$course','$sy')")or die(mysqli_error());  
				
				  echo "<script type='text/javascript'>alert('Successfully added new faculty student!');</script>";
				  echo "<script>document.location='faculty.php'</script>";   
			
		}
?>
