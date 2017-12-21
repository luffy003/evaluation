<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php include('../includes/title.php');?> | Account Settings </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
<link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
<link href="../assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="../assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="../assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md">
<!-- BEGIN HEADER -->
	<?php include('../includes/header.php');?>
<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar" style="width: 250px;">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="../dist/uploads/<?php echo $row['faculty_pic'];?>" class="img-responsive" alt="" style="height:120px;width:120px">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 <?php echo $_SESSION['name'];?>
								</div>
								<div class="profile-usertitle-job">
									 <button type="button" class="btn btn-circle green-haze btn-sm">
									 	<?php echo $row['major'];?>
									 </button>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="profile.php">
										<i class="icon-home"></i>
										Profile </a>
									</li>
									<li>
										<a href="account.php">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>
									<li>
										<a href="agency.php">
										<i class="icon-settings"></i>
										Training Agency</a>
									</li>
									<li>
										<a href="skills.php">
										<i class="icon-settings"></i>
										Language/Skills</a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						<!-- PORTLET MAIN -->
						<div class="portlet light">
							
							<div>
								<h4 class="profile-desc-title">About <?php echo $row['faculty_first'];?></h4>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-twitter"></i>
									<a href="http://www.twitter.com/keenthemes/"><?php echo $row['email'];?></a>
								</div>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-facebook"></i>
									<a href="http://www.facebook.com/keenthemes/"><?php echo $row['contact'];?></a>
								</div>
							</div>
						</div>
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							
							<div class="col-md-9">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a aria-expanded="true" href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li class="">
												<a aria-expanded="false" href="#tab_1_2" data-toggle="tab">Change Avatar</a>
											</li>
											<li class="">
												<a aria-expanded="false" href="#tab_1_3" data-toggle="tab">Change Password</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="account_update.php" method="post">
													<div class="form-group">
														<label class="control-label">First Name</label>
														<input placeholder="First Name" class="form-control" type="text" name="first" value="<?php echo $row['faculty_first'];?>" readonly>
													</div>
													<div class="form-group">
														<label class="control-label">Last Name</label>
														<input placeholder="Last Name" class="form-control" type="text" name="last" value="<?php echo $row['faculty_last'];?>" readonly>
													</div>
													<div class="form-group">
														<label class="control-label">Birthday </label>
														<input placeholder="Write email address" class="form-control" type="date" value="<?php echo $row['bday'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Contact Number</label>
														<input placeholder="Contact #" class="form-control" type="text" name="contact" value="<?php echo $row['contact'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Email Address</label>
														<input placeholder="Write email address" class="form-control" type="email" name="email" value="<?php echo $row['email'];?>">
													</div>
													<div class="margiv-top-10">
														<button class="btn green-haze" name="profile">
														Save Changes </button>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<form action="picture_update.php" role="form" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 100%;">
																<img src="../dist/uploads/<?php echo $row['faculty_pic'];?>" alt="">
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																Select image </span>
																<span class="fileinput-exists">
																Change </span>
																<input type="hidden" name="image1" value="<?php echo $row['faculty_pic'];?>">
																<input type="file" name="image">
																</span>
																<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
																Remove </a>
															</div>
														</div>
														
													</div>
													<div class="margin-top-10">
														<button class="btn green-haze" name="picture">
														Save Changes </button>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="account_update.php" method="post">
													<div class="form-group">
														<label class="control-label">Current Password</label>
														<input class="form-control" type="password" placeholder="Enter Current Password" name="pass">
														<input type="hidden" name="oldpass" value="<?php echo $row['password'];?>"/>
													</div>
													<div class="form-group">
														<label class="control-label visible-ie8 visible-ie9">Password</label>
														<div class="input-icon">
															<i class="fa fa-lock"></i>
															<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="newpass"/>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
														<div class="controls">
															<div class="input-icon">
																<i class="fa fa-check"></i>
																<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpass"/>
															</div>
														</div>
													</div>
													<div class="margin-top-10">
														<button class="btn green-haze" type="submit id="register-submit-btn" name="passchange">
														Change Password </button>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Members</span>
											
										</div>
									</div>
									<div class="portlet-body">

										<div class="table-scrollable table-scrollable-borderless">
											<table class="table table-hover table-light">
			<?php
              include('../includes/dbcon.php');
                  $id=$_SESSION['id'];
                  $query=mysqli_query($con,"select * from faculty where reg_status='1'")or die(mysqli_error());
                    while($row=mysqli_fetch_array($query)){
                        
              ?>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../dist/uploads/<?php echo $row['faculty_pic'];?>" style="width:30px;height: 30px">
												</td>
												<td>
													<a href="javascript:;" class="primary-link"><?php echo $row['faculty_first'];?></a>
												</td>
												
											</tr>
				<?php }?>							
											</table>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
						
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<?php include('../includes/footer.php');?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {       
   	// initiate layout and plugins
   	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features\
	Profile.init(); // init page demo
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>