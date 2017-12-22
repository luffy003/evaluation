<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
     $id = $_POST['id'];
     $category = $_POST['questionCategory'];

 mysqli_query($con,"UPDATE question_category SET question_category='$category' where question_category_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated question category!');</script>";
	echo "<script>document.location='question_category.php'</script>";
 } 


?>