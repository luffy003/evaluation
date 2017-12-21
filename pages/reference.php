
											<div class="row">
												<a class="btn btn-warning pull-right" data-toggle="modal" href="#reference">Add reference</a>
											</div>
											<form role="form" action="reference_update.php" method="post">
													<div class="row">
<?php
												$queryh=mysqli_query($con,"select * from reference where faculty_id='$id'")or die(mysqli_error($con));
                    									while($rowh=mysqli_fetch_array($queryh)){
											?>												
													
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">NAME</label>
																<input placeholder="NAME" class="form-control" type="text" name="name[]" value="<?php echo $rowh['reference_name'];?>">
																<input class="form-control" type="hidden" name="id[]" value="<?php echo $rowh['reference_id'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">ADDRESS</label>
																<input placeholder="Address" class="form-control" type="text" name="address[]" value="<?php echo $rowh['reference_address'];?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">TEL. NO.</label>
																<input placeholder="Reference Contact" class="form-control" type="text" name="contact[]" value="<?php echo $rowh['reference_contact'];?>">
															</div>
														</div>
													
											<?php }?>
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

<div class="modal fade draggable-modal" id="reference" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Reference</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="reference_add.php">	
											<div class="form-group">
												<label class="control-label">NAME</label>
												<input placeholder="NAME" class="form-control" type="text" name="name">
											</div>
											<div class="form-group">
												<label class="control-label">ADDRESS</label>
												<input placeholder="Address" class="form-control" type="text" name="address">
											</div>
											<div class="form-group">
												<label class="control-label">TEL. NO.</label>
												<input placeholder="Reference Contact" class="form-control" type="text" name="contact">
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