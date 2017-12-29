<?php 

include('../dist/includes/dbcon.php');

        $category = $_POST['questionCategory'];

	mysqli_query($con,"INSERT INTO question_category(question_category) VALUES('$category')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new question category!');</script>";
	echo "<script>document.location='question_category.php'</script>";   
	
	
?>