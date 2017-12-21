<?php session_start();

include('includes/dbcon.php');


$user_unsafe=$_POST['email'];
$pass_unsafe=$_POST['password'];

$email = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$query=mysqli_query($con,"select * from faculty where email='$email' and password='$pass' and status='1' and inactive='Active'")or die(mysqli_error($con));
		$row=mysqli_fetch_array($query);
           $id=$row['faculty_id'];
           $first=$row['faculty_first'];
           $last=$row['faculty_last'];
           $pic=$row['faculty_pic'];
           $counter=mysqli_num_rows($query);
		  	if ($counter == 0) 
			  {	
			 	 echo "<script type='text/javascript'>alert('Invalid Email or Password!');
			  	 document.location='login_page.php'</script>";
			  } 
			  elseif ($counter > 0)
			  {
				  $_SESSION['id']=$id;
				  $_SESSION['pic']=$pic;
				  $_SESSION['name']=$first." ".$last;

				  /*if ($row['log']==0)
				  {
					echo "<script type='text/javascript'>document.location='pages/profile_wizard.php'</script>";	  	
				  }
				  else
				  {*/
				  	echo "<script type='text/javascript'>document.location='pages/profile.php'</script>";
				  //}
		 		
		  			//mysqli_query($con,"update faculty set log=log+1 where faculty_id='$id'")or die(mysqli_error($con));  
			  }
?>
				
	</form>	
				
	</body>
</html>
