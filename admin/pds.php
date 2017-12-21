<!DOCTYPE html>
<html>
<head>
	<title>Personal Data Sheet</title>
	<style type="text/css">

		tr td{
			border: 1px solid #000;
		}
		table
		{
			border-collapse: collapse;
		}
		.header{
			background-color: grey;
			-webkit-print-color-adjust:exact;
		}
		.bg{
			background-color: #dcdcdc;
			-webkit-print-color-adjust:exact;
		}
		.col2{
			width: 20%;
		}
		.heading{
			text-align: center;
			background-color: #dcdcdc;
			-webkit-print-color-adjust:exact;
		}
		tr
		{
			height: 18px;
		}
		.hide{
			display: none;
		}
		.page1 .coll,.page1 .colm,.page1 .coln,.page1 .coli,.page1 .colh{
			width: 10px!important;
		}
		body
		{
			font-size: 12px
		}

	</style>
</head>
<body>
<?php
	session_start();
	include('../includes/dbcon.php');
	$id=$_REQUEST['id'];
	$query=mysqli_query($con,"select * from faculty where faculty_id='$id'")or die(mysqli_error($con));
		$row=mysqli_fetch_array($query);
?>
	
	<?php include('page1.php');?>
	<br><br>
	<?php include('page2.php');?>
	<br><br>
	<?php include('page3.php');?>
	<br><br><br><br>
	<?php include('page4.php');?>
</body>
</html>