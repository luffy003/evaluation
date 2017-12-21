<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php include('../includes/title.php');?> | WORK EXPERIENCE  </title>
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
											<span class="caption-subject font-blue-madison bold uppercase">WORK EXPERIENCE </span>
											
												<a class="btn btn-warning pull-right" data-toggle="modal" href="#full">Add Work Experience </a>
											
										</div>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- EDUCATIONAL BACKGROUND -->
											<div class="tab-pane active" id="tab_1_1">
												
												<form action="work_update.php" method="post">
<?php 
 $queryeduc=mysqli_query($con,"select * from work_exp where faculty_id='$id'")or die(mysqli_error());
                   while($rowe=mysqli_fetch_array($queryeduc)){


?>                   								
												<div class="row"><h6 class="text-primary">
														<div class="col-md-3">
															INCLUSIVE DATES FROM
														</div>
														<div class="col-md-3">
															TO
														</div>
														<div class="col-md-3">
															POSITION TITLE  
														</div>
														<div class="col-md-3">
															DEPARTMENT / AGENCY / OFFICE / COMPANY
														</div>
														</h6>
												</div>
												

													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input placeholder="" class="form-control" type="date" name="from[]" value="<?php echo $rowe['work_start'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input placeholder="" class="form-control" type="date" name="to[]" value="<?php echo $rowe['work_end'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input placeholder="Position" class="form-control" type="text" name="position[]" value="<?php echo $rowe['position'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input placeholder="Agency" class="form-control" type="text" name="agency[]" value="<?php echo $rowe['agency'];?>">
															</div>
														</div>
													</div>	
													<div class="row"><h6 class="text-primary">
														<div class="col-md-3">
															MONTHLY SALARY
														</div>
														<div class="col-md-3">
															SALARY/ JOB/ PAY GRADE
														</div>
														<div class="col-md-3">
															STATUS OF APPOINTMENT
														</div>
														<div class="col-md-3">
															GOV'T SERVICE  
														</div>
														</h6>
												</div>
													
													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input class="form-control" type="text" name="salary[]" value="<?php echo $rowe['salary'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input class="form-control" type="text" name="grade[]" value="<?php echo $rowe['grade'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<input class="form-control" type="text" name="status[]" value="<?php echo $rowe['appoint_status'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label"></label>
																<select placeholder='Govt Service' class='form-control' name='govt[]'> 
																	<option><?php echo $rowe['govt'];?></option> 
																	<option>Yes</option> 
																	<option>No</option> 
																</select>
																<input class="form-control" type="hidden" name="id[]" value="<?php echo $rowe['work_exp_id'];?>">
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
											<h4 class="modal-title">Add New Work Experience</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="work_add.php">			
								 			<div class='form-group'> 
												<label class='control-label'>INCLUSIVE DATES FROM</label> 
												<input placeholder='' class='form-control' type='date' name='from'>
											</div>
											<div class='form-group'>
												<label class='control-label'>TO</label>
												<input placeholder='' class='form-control' type='date' name='to'>
											</div>
											<div class='form-group'>
												<label class='control-label'>POSITION TITLE (Write in full/Do not abbreviate</label>
												<input placeholder='POSITION TITLE' class='form-control' type='text' name='position'>
											</div>
											<div class='form-group'>
												<label class='control-label'>DEPARTMENT / AGENCY / OFFICE / COMPANY                                                                                             (Write in full/Do not abbreviate)</label>
												<input placeholder='DEPARTMENT / AGENCY / OFFICE / COMPANY' class='form-control' type='text' name='agency'>
											</div>
											<div class='form-group'>
												<label class='control-label'>MONTHLY SALARY</label>
												<input placeholder='MONTHLY SALARY' class='form-control' type='text' name='salary'>
											</div>
											<div class='form-group'>
												<label class='control-label'>SALARY/ JOB/ PAY GRADE (if applicable)& STEP  (Format "00-0")/ INCREMENT</label>
												<input class='form-control' type='text' name='grade'>
											</div>
											<div class='form-group'>
												<label class='control-label'>STATUS OF APPOINTMENT</label>
												<input class='form-control' type='text' name='status'>
											</div>
											<div class='form-group'>
												<label class='control-label'>GOV'T SERVICE</label>
												<select placeholder='Govt Service' class='form-control' name='govt'> 
													<option>Yes</option> 
													<option>No</option> 
												</select> 
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