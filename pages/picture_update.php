<?php
session_start();
include('../includes/dbcon.php');

 $id = $_SESSION['id'];

 	$name = $_FILES["image"]["name"];

 	if ($name=="")
 	{
 		$name = $_FILES["image1"]["name"];
 	}	
 	else
 	{
		$name = $_FILES["image"]["name"]; 
		$type = $_FILES["image"]["type"];
		$size = $_FILES["image"]["size"];
		$temp = $_FILES["image"]["tmp_name"];
		$error = $_FILES["image"]["error"];
	
		if ($error > 0){
			die("Error uploading file! Code $error.");
			
			}
		else{
			if($size > 100000000000) //conditions for the file
			{
			die("Format is not allowed or file size is too big!");
			
			}
			else
			      {
				move_uploaded_file($temp, "../dist/uploads/".$name);
				mysqli_query($con,"UPDATE faculty SET faculty_pic='$name' where faculty_id='$id'")or die(mysqli_error($con)); 	
				echo "<script type='text/javascript'>alert('Successfully changed your picture!');</script>";

				$_SESSION['pic']=$name;
			      }
			 }     
	
	}
			echo "<script>document.location='account.php'</script>"; 
 
 ?>