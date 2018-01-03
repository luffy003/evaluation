<?php 

include('../dist/includes/dbcon.php');

	$questionCat = $_POST['questionCat'];
        $question = str_replace("'", "''", $_POST['question']);

	mysqli_query($con,"INSERT INTO question(question_category_id,question) VALUES('$questionCat','$question')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new question!');</script>";
	echo "<script>document.location='question.php'</script>";   
	
	
?>