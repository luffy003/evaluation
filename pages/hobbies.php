
											<div class="row">
												<a class="btn btn-warning pull-right" data-toggle="modal" href="#hobbies">Add Skills/Hobbies</a>
											</div>
												<form role="form" action="skills_update.php" method="post">
													<div class="row">
<?php
												$queryh=mysqli_query($con,"select * from skill where faculty_id='$id'")or die(mysqli_error($con));
                    									while($rowh=mysqli_fetch_array($queryh)){
											?>												
													
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label">Skill/Hobby</label>
																<input placeholder="Skill/Hobby" class="form-control" type="text" name="skill[]" value="<?php echo $rowh['skill'];?>">
																<input class="form-control" type="hidden" name="id[]" value="<?php echo $rowh['skill_id'];?>">
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

<div class="modal fade draggable-modal" id="hobbies" tabindex="-1" role="basic" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Add New Training</h4>
										</div>

										<div class="modal-body">
										<form method="post" action="skills_add.php">	
											<div class='form-group'>
												<label class='control-label'>Skill/Hobby</label>
												<input placeholder='Skill/Hobby' class='form-control' type='text' name='skill'>
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