<?php session_start();

include('../dist/includes/dbcon.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$query=mysqli_query($con,"select * from admin where admin_username='$user' and admin_password='$pass' and admin_status='active'")or die(mysqli_error($con));
		$row=mysqli_fetch_array($query);
           $id=$row['admin_id'];
           $first=$row['admin_first'];
           $last=$row['admin_last'];
           $counter=mysqli_num_rows($query);

		  	if ($counter == 0) 
			  {	
				  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='index.php'</script>";
			  } 
			  else
			  {
				  $_SESSION['id']=$id;	
				  $_SESSION['name']=$first." ".$last;

			  	echo "<script type='text/javascript'>document.location='home.php'</script>";  
			  }
}
?>
				
	</form>	
				
	</body>
</html>
