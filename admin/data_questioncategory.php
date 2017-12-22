<?php
session_start();
      if(empty($_SESSION['id'])):
      header('Location:../index.php');
      endif;include('../dist/includes/dbcon.php');


$result = mysqli_query($con,"SELECT question_category,COUNT(*) FROM faculty natural join category
 where status='1' and inactive='Active' group by category");
	
$rows = array();
while($r = mysqli_fetch_array($result)) {
		$row[0] = $r[0];	
	    $row[1] = $r[1];
	    array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>

