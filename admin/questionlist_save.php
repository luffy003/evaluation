<?php 

include('../dist/includes/dbcon.php');
        
        $id = $_POST['questionCat'];
        $question = $_POST['questionList'];

	mysqli_query($con,"INSERT INTO question(question_category_id,question) VALUES('$id','$question')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new question!');</script>";
	echo "<script>document.location='question.php'</script>";   
	
	
?>