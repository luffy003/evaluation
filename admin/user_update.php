<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
	 $last = $_POST['last'];
	 $first = $_POST['first'];
	 $username = $_POST['username'];
	 
	 $image = $_FILES["image"]["name"];
		 if ($image=="")
		 {
			$name=$_POST['image1']; 
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
	 mysqli_query($con,"UPDATE admin SET admin_last='$last',admin_first='$first',admin_username='$username',admin_pic='$name' where admin_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated admin user details!');</script>";
		echo "<script>document.location='user.php'</script>";
	
} 

