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
											<span class="caption-subject font-blue-madison bold uppercase">Family Background</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a aria-expanded="true" href="#tab_1_1" data-toggle="tab">Parents</a>
											</li>
											<li class="">
												<a aria-expanded="false" href="#tab_1_2" data-toggle="tab">Spouse/Children</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">

											<!-- PERSONAL INFO TAB -->
											
											
											<div class="tab-pane active" id="tab_1_1">
												<div class="row">
													<a class="btn btn-warning pull-right" data-toggle="modal" href="#full">Add Parent </a>
												</div>
												<form role="form" action="family_update.php" method="post">
<?php
												$queryf=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Father' or relationship='Mother'")or die(mysqli_error($con));
                    									while($rowf=mysqli_fetch_array($queryf)){
											?>												
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">Father's Surname</label>
																<input placeholder="Write your father's last name" class="form-control" type="text" name="last[]" value="<?php echo $rowf['last'];?>" required>
																<input class="form-control" type="hidden" name="relationship[]" value="Father">
																<input class="form-control" type="hidden" name="fid[]" value="<?php echo $rowf['fam_id'];?>">
															</div>
														</div>
														<div class="col-md-4">
																<div class="form-group">
																<label class="control-label">First Name</label>
																<input placeholder="Write your father's first name" class="form-control" type="text" name="first[]" value="<?php echo $rowf['first'];?>" required>
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Middle Name</label>
																<input placeholder="Write your father's middle name" class="form-control" type="text" name="middle[]" value="<?php echo $rowf['middle'];?>">
															</div>
														</div>
														<div class="col-md-1">
															<div class="form-group">
															<label class="control-label">Ext</label>
															<input placeholder="Jr" class="form-control" type="text" name="ext" value="<?php echo $rowf['ext'];?>">
														</div>
													</div>
													</div>	
													<?php }?>
													
													
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
													<form action="spouse_update.php" role="form" method="post">
<?php
												$querys=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Spouse'")or die(mysqli_error($con));
                    									$rows=mysqli_fetch_array($querys);
											?>													
													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Spouse Surname</label>
																<input placeholder="Write your Spouse's last name" class="form-control" type="text" name="slast" value="<?php echo $rows['last'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">First Name</label>
																<input placeholder="Write your spouse's first name" class="form-control" type="text" name="sfirst" value="<?php echo $rows['first'];?>">
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Middle Name</label>
																<input placeholder="Write your spouse's middle name" class="form-control" type="text" name="smiddle" value="<?php echo $rows['middle'];?>">
																<input type="hidden" name="sfid" value="<?php echo $rows['fam_id'];?>">
																<input type="hidden" name="srelationship" value="Spouse">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Ext</label>
																<input placeholder="Jr" class="form-control" type="text" name="sext" value="<?php echo $rows['ext'];?>">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Occupation</label>
																<input placeholder="Write your Spouse's Occupation" class="form-control" type="text" name="occupation" value="<?php echo $rows['occupation'];?>">
															</div>
														</div>
														<div class="col-md-3">
																<div class="form-group">
																<label class="control-label">Employer/Business Name</label>
																<input placeholder="Write your spouse's Employer/Business Name" class="form-control" type="text" name="emp_bus" value="<?php echo $rows['emp_bus'];?>">
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Business Address</label>
																<input placeholder="Write your spouse's middle name" class="form-control" type="text" name="bus_address" value="<?php echo $rows['bus_address'];?>">
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label class="control-label">Contact</label>
																<input placeholder="Contact #" class="form-control" type="text" name="contact" value="<?php echo $rows['contact'];?>">
															</div>
														</div>
													</div><hr>
														
<?php
												$queryc=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Child'")or die(mysqli_error($con));
                    									while($rowc=mysqli_fetch_array($queryc)){
											?>		
																										<div class='row'>
														<div class='col-md-3'>
															<div class='form-group'>
																<label class='control-label'>Child's Surname</label>
																<input placeholder='Write your child's last name' class='form-control' type='text' name='last[]' value="<?php echo $rowc['last'];?>">
																<input type="hidden" name="fid[]" value="<?php echo $rowc['fam_id'];?>" required>
															</div>
														</div>
														<div class='col-md-3'>
																<div class='form-group'>
																<label class='control-label'>First Name</label>
																<input placeholder='Write your childs's first name' class='form-control' type='text' name='first[]' value="<?php echo $rowc['first'];?>" required>
															</div>
														</div>
													
														<div class='col-md-2'>
															<div class='form-group'>
																<label class='control-label'>Middle Name</label>
																<input placeholder='Write your child's middle name' class='form-control' type='text' name='middle[]' value="<?php echo $rowc['middle'];?>">
															</div>
														</div>
														<div class='col-md-1'>
															<div class='form-group'>
																<label class='control-label'>Ext</label>
																<input placeholder='Jr/Sr' class='form-control' type='text' name='ext[]' value="<?php echo $rowc['ext'];?>">
															</div>
														</div>
														<div class='col-md-3'>
															<div class='form-group'>
																<label class='control-label'>Birthday</label>
																<input placeholder='Write your child's middle name' class='form-control' type='date' name='bday[]' value="<?php echo $rowc['bday'];?>">
															</div>
														</div>
													</div>	
												<?php }?>												
													<hr>
													
													<div class="row">
														<div class="col-md-4">
															<div class="margin-top-10">
																<button class="btn green-haze" name="profile">
																Save Changes </button>
																<a href="javascript:;" class="btn default">
																Cancel </a>
															</div>
														</div>
														<div class="col-md-4">
															<input type="button" class="btn btn-success pull-right" value="Add Child/Children" onClick="addInput('dynamicInput');">
														</div>
													</div>
													<div id="dynamicInput">
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
<!-- BEGIN PRE-FOOTER -->
<div class="modal fade draggable-modal" id="full" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add Parent</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="family_add.php">			
								 			
											<div class='form-group'>
																<label class='control-label'>Surname</label>
																<input type="text" placeholder='Last Name' class='form-control' type='text' name='last' required>
															</div>
											<div class='form-group'>
																<label class='control-label'>First Name</label>
																<input type="text" placeholder='First Name' class='form-control' type='text' name='first' required>
															</div>
											<div class='form-group'>
																<label class='control-label'>Middle Name</label>
																<input type="text" placeholder='Middle Name' class='form-control' type='text' name='middle'>
															</div>
											<div class='form-group'>
																<label class='control-label'>Ext</label>
																<input type="text" placeholder='Extension (Jr ,Sr) Name' class='form-control' type='text' name='ext'>
															</div>
											<div class='form-group'> 
												<label class='control-label'>Relationship</label> 
												<select placeholder='Level' class='form-control' name='relationship'> 
													<option>Father</option> 
													<option>Mother</option> </select> 
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
<script>
		var counter = 1;
		var limit = 25;
		function addInput(divName){
			 if (counter == limit)  {
				  alert("You have reached the limit of adding " + counter + " inputs");
			 }
			 else {
				  var newdiv = document.createElement('div');
				  newdiv.innerHTML ="<div class='row'> <div class='col-md-3'> <div class='form-group'> <label class='control-label'>Child's Surname</label> <input placeholder='Write your child's last name' class='form-control' type='text' name='clast[]' required> </div> </div> <div class='col-md-3'> <div class='form-group'> <label class='control-label'>First Name</label> <input placeholder='Write your childs's first name' class='form-control' type='text' name='cfirst[]' required> </div> </div> <div class='col-md-2'> <div class='form-group'> <label class='control-label'>Middle Name</label> <input placeholder='Write your child's middle name' class='form-control' type='text' name='cmiddle[]'> </div> </div> <div class='col-md-1'> <div class='form-group'> <label class='control-label'>Ext</label> <input placeholder='Jr' class='form-control' type='text' name='cext[]'> </div> </div> <input type='hidden' name='relationship[]' value='Child'> <div class='col-md-3'> <div class='form-group'> <label class='control-label'>Birthday</label> <input placeholder='Birthday' class='form-control' type='date' name='cbday[]'> </div> </div> </div><hr>";
				  document.getElementById(divName).appendChild(newdiv);
				  counter++;
			 }
		}
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>