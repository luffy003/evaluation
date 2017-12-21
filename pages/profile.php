<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php include('../includes/title.php');?> | New User Profile</title>
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
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
  $("#draggable").draggable({
      handle: ".modal-header"
  });
});
</script>
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
					<?php include('sidebar.php');?>
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Personal Information</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a aria-expanded="true" href="#tab_1_1" data-toggle="tab">Personal Info</a>
											</li>
											<li class="">
												<a aria-expanded="false" href="#tab_1_2" data-toggle="tab">Address/Others</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="profile_update.php" method="post">
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Surname</label>
															<input placeholder="Write your last name" class="form-control" type="text" name="last" value="<?php echo $row['faculty_last'];?>">
														</div>
													</div>
													<div class="col-md-4">
															<div class="form-group">
															<label class="control-label">First Name</label>
															<input placeholder="Write your first name" class="form-control" type="text" name="first" value="<?php echo $row['faculty_first'];?>">
														</div>
													</div>
												
													<div class="col-md-3">
														<div class="form-group">
															<label class="control-label">Middle Name</label>
															<input placeholder="Write your middle name" class="form-control" type="text" name="middle" value="<?php echo $row['faculty_middle'];?>">
														</div>
													</div>
													<div class="col-md-1">
															<div class="form-group">
															<label class="control-label">Ext</label>
															<input placeholder="Jr" class="form-control" type="text" name="ext" value="<?php echo $row['faculty_ext'];?>">
														</div>
													</div>
												</div>		
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Date of Birth</label>
															<input type="date" class="form-control" name="bday" value="<?php echo $row['bday'];?>">
														</div>
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<label class="control-label">Place of Birth</label>
															<input placeholder="Write Place of Birth" class="form-control" type="text" name="pob" value="<?php echo $row['pob'];?>">
														</div>
													</div>
												</div>	
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<div class="radio-list">
																<div class="col-md-6">
																	<label>
																	<input type="radio" name="gender" value="Male" data-title="Male" <?php if ($row['gender']=="Male") echo "checked";?>/>
																	Male </label>
																</div>
																<div class="col-md-6">
																	<label>
																	<input type="radio" name="gender" value="Female" data-title="Female" <?php if ($row['gender']=="Female") echo "checked";?>/>
																	Female </label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Civil Status</label>
															<select name="civil" id="" class="form-control">
																  <option><?php echo $row['civil'];?></option>	
																  <option>Single</option>
										                          <option>Married</option>
										                          <option>Widow/Widower</option>
										                          <option>Separated</option>
															</select>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Citizenship</label>
															<input placeholder="Write Citizenship" class="form-control" type="text" name="citizenship" value="<?php echo $row['citizenship'];?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Height (m)</label>
															<input placeholder="Write Height in centimeters" class="form-control" type="text" name="height" value="<?php echo $row['height'];?>">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Weight (kg)</label>
															<input placeholder="Write weight in kilograms" class="form-control" type="text" name="weight" value="<?php echo $row['weight'];?>">
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Blood Type</label>
															<input placeholder="Write blood type" class="form-control" type="text" name="blood_type" value="<?php echo $row['blood_type'];?>">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="margiv-top-10">
															<button class="btn green-haze" name="profile">
															Save Changes </button>
															<a href="javascript:;" class="btn default">
															Cancel </a>
														</div>
													</div>
												</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<form action="address_update.php" role="form" method="post">
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">Residential Address</label>
																<textarea placeholder="Enter Residential Address" class="form-control" type="text" name="raddress"><?php echo $row['res_address'];?></textarea>
															</div>
														</div>
														<div class="col-md-3">
																<div class="form-group">
																<label class="control-label">Zipcode</label>
																<input placeholder="Enter Residential Address Zipcode" class="form-control" type="text" name="rzip" value="<?php echo $row['res_zip'];?>">
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Telephone</label>
																<input placeholder="Enter Residential Address Telephone Number" class="form-control" type="text" name="rtel" value="<?php echo $row['res_tel'];?>">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">Permanent Address</label>
																<textarea placeholder="Enter Permanent Address" class="form-control" type="text" name="paddress"><?php echo $row['perm_address'];?></textarea>
															</div>
														</div>
														<div class="col-md-3">
																<div class="form-group">
																<label class="control-label">Zipcode</label>
																<input placeholder="Enter Permanent Address Zipcode" class="form-control" type="text" name="pzip" value="<?php echo $row['perm_zip'];?>">
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Telephone</label>
																<input placeholder="Enter Permanent Address Telephone Number" class="form-control" type="text" name="ptel" value="<?php echo $row['perm_tel'];?>">
															</div>
														</div>
													
													</div>	

													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">Email</label>
																<input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">Cellphone</label>
																<input placeholder="Write Cellphone Number if any" class="form-control" type="text" name="contact" value="<?php echo $row['contact'];?>">
															</div>
														</div>
													</div>	
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">GSIS No.</label>
																<input placeholder="Write GSIS ID number" class="form-control" type="text" name="gsis" value="<?php echo $row['gsis'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">Pag-ibig</label>
																<input placeholder="Write Pag-ibig ID number" class="form-control" type="text" name="pagibig" value="<?php echo $row['pagibig'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">Philhealth No.</label>
																<input placeholder="Write Philhealth Number" class="form-control" type="text" name="philhealth" value="<?php echo $row['philhealth'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">SSS No.</label>
																<input placeholder="Write SSS Number" class="form-control" type="text" name="sss" value="<?php echo $row['sss'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">TIN</label>
																<input placeholder="Write TIN Number" class="form-control" type="text" name="tin" value="<?php echo $row['tin'];?>">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="margiv-top-10">
																<button class="btn green-haze" name="profile">
																Save Changes </button>
																<a href="javascript:;" class="btn default">
																Cancel </a>
															</div>
														</div>
													</div>

												</form>
											<!-- CHANGE PASSWORD TAB -->
											
										</div>
									</div>
								</div>
							</div>
							
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
<div class="modal fade draggable-modal" id="seminar" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Seminar Attended</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="seminar_add.php">			
								 				 <div class="form-group">
														<label class="control-label">Seminar Name</label>
														<input placeholder="Write Seminar Name" class="form-control" type="text" name="seminar">
													</div>
							
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn blue">Save changes</button>
										</div>
										</form>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
<div class="modal fade draggable-modal" id="work" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Work Experience</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="work_add.php">			
								 				 <div class="form-group">
														<label class="control-label">Agency Name</label>
														<input placeholder="Write Agency Name" class="form-control" type="text" name="agency">
													</div>
							
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn blue">Save changes</button>
										</div>
									</div>
									</form>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->

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