
											<div class="row">
												<a class="btn btn-warning pull-right" data-toggle="modal" href="#recognition">Add Recognition</a>
											</div>
											<form role="form" action="recognition_update.php" method="post">
													<div class="row">
<?php
												$queryh=mysqli_query($con,"select * from recognition where faculty_id='$id'")or die(mysqli_error($con));
                    									while($rowh=mysqli_fetch_array($queryh)){
											?>												
													
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">NON-ACADEMIC DISTINCTIONS / RECOGNITION (Write in full)</label>
																<input placeholder="Skill/Hobby" class="form-control" type="text" name="recognition[]" value="<?php echo $rowh['recognition'];?>">
																<input class="form-control" type="hidden" name="id[]" value="<?php echo $rowh['recognition_id'];?>">
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

<div class="modal fade draggable-modal" id="recognition" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Recognition</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="recognition_add.php">	
											<div class='form-group'>
												<label class='control-label'>NON-ACADEMIC DISTINCTIONS / RECOGNITION (Write in full)</label>
												<input placeholder='NON-ACADEMIC DISTINCTIONS / RECOGNITION' class='form-control' type='text' name='recognition'>
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