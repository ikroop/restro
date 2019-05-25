	<!DOCTYPE html>
	<html lang="en">
	  
	<!-- Mirrored from ygamin.bitbucket.io/groggery/1.1.0/index_default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 05:27:35 GMT -->
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="shortcut icon" href="assets/favicon/favicon_Groggery.ico">

	    <title>TDS | Bar & Restro Lounge Template</title>


	    <!-- CSS Global -->
	    <link href="<?php echo base_url()?>css/styles.css" rel="stylesheet">

	  </head>
	  <body data-spy="scroll" data-target=".navbar" data-offset="70">

	    <!-- TO THE TOP BUTTON
	    ================================================== -->
	    <a id="back-to-top" href="#section_welcome" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
	      <i class="ion-android-arrow-up"></i>
	    </a>

	    <!-- PRELOADER
	    ================================================== -->
	    <div id="loader-wrapper">
	      <div id="loader"></div>
	    </div>



	     <section class="section_review">
	      <div class="container">
	        <div class="row">
	          <div class="col-sm-4">
	            <h2 class="section_review_title">A few words about us...</h2>
	          </div>
	          <div class="col-sm-8">
	            <form id="form_sendemail" action="<?php echo base_url('Admin/addRating')?>" method="post" autocomplete="off">
					  <input type="hidden" name="customer_id" value="<?php echo isset($registration_id) ? $registration_id : '420'; ?>">
					  <!-- Name -->
					 <div class="form-group">
					    <label for="name" class="fsr-only">1. Quality of food  ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_1" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_1" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_1" value="1">Average</label>
						    </div>
						    

						  </div>

					</div>
					 <div class="form-group">
					    <label for="name" class="fsr-only">2. Cleanliness of Restaurant / Rest Room ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_2" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_2" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_2" value="1">Average</label>
						    </div>
						   
						  </div>

					</div>
					 <div class="form-group">
					    <label for="name" class="fsr-only">3. Quality of Service ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_3" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_3" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_3" value="1">Average</label>
						    </div>
						    
						  </div>

					</div>
					
					 <div class="form-group">
					    <label for="name" class="fsr-only">4. Friendliness of Staff ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_4" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_4" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_4" value="1">Average</label>
						    </div>
						    
						  </div>

					</div>
					 <div class="form-group">
					    <label for="name" class="fsr-only">5. Appearance of Staff ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_5" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_5" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_5" value="1">Average</label>
						    </div>
						    
						  </div>

					</div>

					<div class="form-group">
					    <label for="name" class="fsr-only">6. Value for Money ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_6" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_6" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_6" value="1">Average</label>
						    </div>
						    
						  </div>

					</div>
<div class="form-group">
					    <label for="name" class="fsr-only">7. Restaurant Interior Design ?</label>
					    <div class="row">
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_7" value="3">Execellent</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_7" value="2">Good</label>
						    </div>
						    <div class="radio radio-inline col-md-3">
						      <label><input type="radio" name="question_7" value="1">Average</label>
						    </div>
						    
						  </div>

					</div>


					<div class="form-group">
					    <label for="name" class="fsr-only">Comment</label>
					    <div class="row">
					    	<div class="col-sm-8">
						    	<textarea class="form-control" rows="5" placeholder="Please Enter your comment....." name="comment"></textarea>
							</div>
						  </div>

					</div>


					  
					  <!-- Submit -->
					  <button type="submit" class="btn btn-default col-sm-8">
					    Submit
					  </button>

					</form>   
	          </div>
	        </div> <!-- .row -->
	      </div> <!-- .container -->
	    </section>

	    <script src="<?php echo base_url()?>plugins/jquery/jquery-1.12.4.min.js"></script>
	    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
	   
	    

	    <script src="<?php echo base_url()?>js/custom.js"></script>

	  </body>

	</html>