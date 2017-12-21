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
											<span class="caption-subject font-blue-madison bold uppercase">Educational Background</span>
											
												<a class="btn btn-warning pull-right" data-toggle="modal" href="#full">Add School </a>
											
										</div>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- EDUCATIONAL BACKGROUND -->
											<div class="tab-pane active" id="tab_1_1">
												
												<form action="educ_update.php" method="post">
<?php 
 $queryeduc=mysqli_query($con,"select * from educ where faculty_id='$id'")or die(mysqli_error());
                   while($rowe=mysqli_fetch_array($queryeduc)){


?>                   								
												<div class="row" style="text-align: center;">
														<div class="col-md-12 alert alert-info" style="height:50px">
															<div class="form-group">
																<input class="form-control" type="hidden" name="eid[]" value="<?php echo $rowe['educ_id'];?>">
																<b><?php echo $rowe['level'];?></b>
															</div>
														</div>
													</div>
												<div class="row"><h6 class="text-primary">
														<div class="col-md-4">
															SCHOOL
														</div>
														<div class="col-md-4">
															BASIC EDUCATION/DEGREE/COURSE<br>(Write in full)
														</div>
														<div class="col-md-2">
															PERIOD OF ATTENDACE<br>From 
														</div>
														<div class="col-md-2">
															To
														</div></h6>
												</div>

													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label"></label>
																<textarea placeholder="Name of School" class="form-control" type="text" name="school[]"><?php echo $rowe['school'];?></textarea>
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label"></label>
																<textarea placeholder="" class="form-control" type="text" name="course[]"><?php echo $rowe['course'];?></textarea>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input placeholder="Attendance Date" class="form-control" type="number" name="from[]" value="<?php echo $rowe['at_from'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input placeholder="Attendance Date" class="form-control" type="number" name="to[]" value="<?php echo $rowe['at_to'];?>">
															</div>
														</div>
													</div>	

													<div class="row"><h6 class="text-primary">
														
														<div class="col-md-6">
															HIGHEST LEVEL/UNITS EARNED       
(if not graduated
														</div>
														<div class="col-md-2">
															YEAR GRADUATED
														</div>
														<div class="col-md-4">
															SCHOLARSHIP/ACADEMIC HONORS RECEIVED
														</div></h6>
												</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label"></label>
																<input class="form-control" type="text" name="level_units[]" value="<?php echo $rowe['level_units'];?>">
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label class="control-label"></label>
																<input class="form-control" type="text" name="grad[]" value="<?php echo $rowe['grad'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label"></label>
																<input class="form-control" type="text" name="honors[]" value="<?php echo $rowe['honors'];?>">
															</div>
														</div>
													</div>	<hr>
													
<?php }?>														
													<div id="dynamicInput">
													<div class="row">
														<div class="col-md-6">
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
</div>
											<!-- END PERSONAL INFO TAB -->
										</div>		
									</div>			
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
<div class="modal fade draggable-modal" id="full" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New School</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="educ_add.php">			
								 			<div class='form-group'> 
												<label class='control-label'>Level</label> 
												<select placeholder='Level' class='form-control' name='level'> 
													<option>Vocational/Trade Course</option> 
													<option>Graduate Studies</option> </select> 
											</div>
											<div class='form-group'>
																<label class='control-label'>Name of School</label>
																<textarea placeholder='Name of School' class='form-control' type='text' name='school'></textarea>
															</div>
											<div class='form-group'>
																<label class='control-label'>BASIC EDUCATION/DEGREE/COURSE (Write in full)</label>
																<textarea placeholder='' class='form-control' type='text' name='course'></textarea>
															</div>
											<div class='form-group'>
																<label class='control-label'>PERIOD OF ATTENDACE
From</label>
																<input placeholder='Attendance Date' class='form-control' type='number' name='from'>
															</div>
											<div class='form-group'>
																<label class='control-label'>To</label>
																<input placeholder='Attendance Date' class='form-control' type='number' name='to'>
															</div>
											<div class='form-group'>
																<label class='control-label'>HIGHEST LEVEL/UNITS EARNED (if not graduated</label>
																<input class='form-control' type='text' name='level_units'>
															</div>
											<div class='form-group'>
																<label class='control-label'>YEAR GRADUATED</label>
																<input class='form-control' type='number' name='grad'>
															</div>
											<div class='form-group'>
																<label class='control-label'>SCHOLARSHIP/ACADEMIC HONORS RECEIVED

</label>
																<input class='form-control' type='text' name='honors'>
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