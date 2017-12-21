<?php 

include('../dist/includes/dbcon.php');
	
	$last = $_POST['last'];
	$first = $_POST['first'];
	$pass = $_POST['pass'];
	$username = $_POST['username'];
	
	$name = $_FILES["image"]["name"];
	if ($name=="")
	{
		$name="default.gif";
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
		      }
			}
	}	
		mysqli_query($con,"INSERT INTO admin(admin_last,admin_first,admin_password,admin_username,admin_pic,admin_status) 
			VALUES('$last','$first','$pass','$username','$name','active')")or die(mysqli_error());  
			echo "<script type='text/javascript'>alert('Successfully added new admin user!');</script>";
			echo "<script>document.location='user.php'</script>";   
	
	
?>