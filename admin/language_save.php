<?php 

include('../dist/includes/dbcon.php');

	$language = $_POST['language'];

	mysqli_query($con,"INSERT INTO language(language) VALUES('$language')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new language!');</script>";
	echo "<script>document.location='language.php'</script>";   
	
	
?>