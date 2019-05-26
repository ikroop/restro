<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from ygamin.bitbucket.io/groggery/1.1.0/index_default.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 May 2019 05:27:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/favicon/favicon_Groggery.ico">

    <title>TDS | Bar & Restaurant Template</title>


    <!-- CSS Global -->
    <link href="<?php echo base_url()?>css/styles.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/datepicker.min.css" rel="stylesheet">
    <script src="<?php echo base_url()?>plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/datepicker.min.js"></script>
    <!-- hello -->
    <!-- jay -->

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



    <!-- section welcome -->
    <section class="section_welcome" id="section_welcome">
      <div class="container">
        <div class="row">
          	<div class="col-sm-8">

	            <div class="welcome_content">
	              <h1 class="welcome_content_heading"><img src="<?php echo base_url()?>img/logo1.png" class="col-md-6 text-center center-block img-responsive"></h1>
	              <p class="welcome_content_subheading">Bar & Restro Lounge</p>
	              <ul class="welcome_content_logo">
	                <li><i class="icon ion-ios-minus-empty"></i></li>
	                <li><i class="icon ion-fork"></i></li>
	                <li><i class="icon ion-wineglass"></i></li>
	                <li><i class="icon ion-knife"></i></li>
	                <li><i class="icon ion-ios-minus-empty"></i></li>
	              </ul>
	              <h3 class="welcome_content_caption">Thank you for chossing us to have your food & drinks !!</h3>
	            </div> <!-- .welcome_content -->
          	</div>
        	<div class="col-sm-4">

            <div class="welcome_content">
	          	<form id="form_sendemail" action="<?php echo base_url('Admin/registration')?>" method="post">
				  
				  <!-- Name -->
				  <div class="form-group">
				    <label for="name" class="sr-only">Name *</label>
				    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="<?php echo set_value('name')?>"y>
				    <span class="help-block"><?php echo form_error('name');?></span>
				  </div>

				  <!-- Message -->
				  <div class="form-group">
				    <label for="mobile" class="sr-only">Mobile *</label>
				    <input type="number"  name="mobile" class="form-control" id="mobile"  placeholder="Enter your mobile" value="<?php echo set_value('mobile');?>" minlength="10" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
				    <span class="help-block"><?php echo form_error('mobile');?></span>
				  </div>


				  <!-- Email -->
				  <div class="form-group">
				    <label for="date" class="sr-only">Birth Date</label>
				    <input class="form-control" id="birthdate" data-toggle="birthdate" value="<?php echo set_value('birthdate')?>">
				    <span class="help-block"><?php echo form_error('birthdate');?></span>
				  </div>

				  <!-- Email -->
				  <div class="form-group">
				    <label for="anniversary_date" class="sr-only">Anniversary Date</label>
				    <input class="form-control" id="anniversary_date" data-toggle="anniversary_date" value="<?php echo set_value('anniversary_date')?>" value="<?php echo set_value('anniversary_date')?>">
				    <span class="help-block"><?php echo form_error('anniversary_date');?></span>
				  </div>

				  <!-- Email -->
				  <div class="form-group">
				    <label for="email" class="sr-only">Email address</label>
				    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" value="<?php echo set_value('email')?>">
				    <span class="help-block"><?php echo form_error('email');?></span>
				  </div>

				  <!-- Submit -->
				  <button type="submit" class="btn btn-default col-sm-12">
				    Submit
				  </button>

				</form>   	
              
          	</div>
        	</div> 
      	</div> <!-- .row -->
  	  </div><!-- .container -->
      <div class="welcome_bg"></div>
    </section>

    
    <script src="<?php echo base_url()?>js/custom.js"></script>

  </body>

</html>
<script type="text/javascript">
	$('[data-toggle="birthdate"]').datepicker({
	    'format': 'dd-mm-yyyy',
	    'setDate' : <?php echo empty(set_value('birthdate')) ?  '01-01-1994' : set_value('birthdate');?>,
	});

	$('[data-toggle="anniversary_date"]').datepicker({
	    format: 'dd-mm-yyyy'
	});
</script>