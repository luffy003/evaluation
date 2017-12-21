<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $language = $_POST['language'];

 mysqli_query($con,"UPDATE language SET language='$language' where lang_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated language!');</script>";
	echo "<script>document.location='language.php'</script>";
 } 

