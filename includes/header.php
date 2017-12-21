<?php session_start();
error_reporting(0);
?>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<img src="../dist/img/logo.png" height="80px">
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="logout.php" class="dropdown-toggle">
						
						<span class="username username-hide-mobile"><i class="icon-key"></i>Logout</span>
						</a>
						
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="profile.php">Home</a>
					</li>
					<li>
						<a href="announcement.php">Announcements</a>
					</li>
					
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<?php
              include('../includes/dbcon.php');
                  $id=$_SESSION['id'];
                  $query=mysqli_query($con,"select * from faculty where faculty_id='$id'")or die(mysqli_error());
                    $row=mysqli_fetch_array($query);
?>