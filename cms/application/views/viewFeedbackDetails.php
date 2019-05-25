	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Content area -->
			<div class="content">
<!-- Colors -->
            	<div class="card">
					<div class="card-header ">
						<h6 class="card-title">Name :<code> <?php echo ucwords($feedback['name']);?></code></h6>
						<h6 class="card-title">Mobile : <code> <?php echo $feedback['mobile'];?></code> </h6>
						<h6 class="card-title">Email : <code> <?php echo $feedback['email'];?></code> </h6>
						<h6 class="card-title">Birth Date : <code> <?php echo $feedback['birthdate'];?></code> </h6>
						<h6 class="card-title">Anniversary Date : <code> <?php echo $feedback['anniversary_date'];?></code> </h6>
						
					</div>
					<hr>
                	<div class="card-body">
        	

                		<div class="row">
	                		<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">1. Quality of food  ?</label>
									<div class="row checkbox-row">
											
											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_1" class="form-check-input-styled-success" <?php if($feedback['question_1'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_1" class="form-check-input-styled-primary" <?php if($feedback['question_1'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_1" class="form-check-input-styled-danger" <?php if($feedback['question_1'] == 1){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>

											
										
										
									</div>
								</div>
							</div>

							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">2. Cleanliness of Restaurant / Rest Room ?</label>
									<div class="row checkbox-row">
											
											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_2" class="form-check-input-styled-success" <?php if($feedback['question_2'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_2" class="form-check-input-styled-primary" <?php if($feedback['question_2'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_2" class="form-check-input-styled-danger" <?php if($feedback['question_2'] == 4){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>

											
										
										
									</div>
								</div>
							</div>


							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">3. Quality of Service ?</label>
									<div class="row checkbox-row">
											
											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_3" class="form-check-input-styled-success" <?php if($feedback['question_3'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_3" class="form-check-input-styled-primary" <?php if($feedback['question_3'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_3" class="form-check-input-styled-danger" <?php if($feedback['question_3'] == 4){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>
	
										
									</div>
								</div>
							</div>


							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">4. Friendliness of Staff ?</label>
									<div class="row checkbox-row">
											
											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_4" class="form-check-input-styled-success" <?php if($feedback['question_4'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_4" class="form-check-input-styled-primary" <?php if($feedback['question_4'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_4" class="form-check-input-styled-danger" <?php if($feedback['question_4'] == 4){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>
										
									</div>
								</div>
							</div>


							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">5. Appearance of Staff ?</label>
									<div class="row checkbox-row">
											

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_5" class="form-check-input-styled-success" <?php if($feedback['question_5'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_5" class="form-check-input-styled-primary" <?php if($feedback['question_5'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_5" class="form-check-input-styled-danger" <?php if($feedback['question_5'] == 1){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>

										
										
									</div>
								</div>
							</div>


							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">6. Please rate your visit on value for the money.</label>
									<div class="row checkbox-row">
											
											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_6" class="form-check-input-styled-success" <?php if($feedback['question_6'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_6" class="form-check-input-styled-primary" <?php if($feedback['question_6'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_6" class="form-check-input-styled-danger" <?php if($feedback['question_6'] == 1){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>

											
										
										
									</div>
								</div>
							</div>

							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">7. Value of Money ?</label>
									<div class="row checkbox-row">
											
											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_7" class="form-check-input-styled-success" <?php if($feedback['question_7'] == 3){ echo 'checked';}?> data-fouc>
													Success checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_7" class="form-check-input-styled-primary" <?php if($feedback['question_7'] == 2){ echo 'checked';}?> data-fouc>
													Primary checkbox
												</label>
											</div>

											<div class="form-check col-md-4">
												<label class="form-check-label">
													<input type="radio" name="question_7" class="form-check-input-styled-danger" <?php if($feedback['question_7'] == 1){ echo 'checked';}?> data-fouc>
													Danger checkbox
												</label>
											</div>

											
										
										
									</div>
								</div>
							</div>

							<div class="col-md-12 question-row">
								<div class="form-group mb-3 mb-md-2">
									<label class="font-weight-semibold">Comment</label>
									<div class="row checkbox-row">
										<textarea class="form-control" readonly><?php echo $feedback['comment']; ?></textarea>
									</div>
								</div>
							</div>

				
						</div>
    				</div>
				</div>
				<!-- /colors -->
			</div>
		</div>
	</div>