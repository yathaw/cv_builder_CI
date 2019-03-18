<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?php echo base_url();?>template/cvform/favicon.ico"> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title> CV Builder </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Files -->
    <link href="<?php echo base_url();?>template/wizard/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>template/wizard/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url();?>template/wizard/assets/css/demo.css" rel="stylesheet" />

  <!-- Summernote -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/summernote/summernote-lite.css">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('<?php echo base_url();?>template/wizard/assets/img/wizard.jpg')">


	<!--  Made With Get Shit Done Kit  -->
    <?php if($this->uri->segment(1)=="register"){ ?>
  		<a href="<?php echo base_url(); ?>" class="made-with-mk">
  			<div class="brand"> << </div>
  			<div class="made-with"> Go To <strong> Login </strong> </div>
  		</a>
    <?php } else { ?>
      <a href="<?php echo base_url(); ?>register" class="made-with-mk">
        <div class="brand"> << </div>
        <div class="made-with"> Go To <strong> Register </strong> </div>
      </a>

    <?php } ?>

    <!--   Big container   -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <div class="wizard-container">

            <div class="card wizard-card" data-color="orange" id="wizardProfile">
              
              <?php $this->load->view($innerdata); ?>
              
            </div>
          </div> <!-- wizard container -->
        </div>
      </div><!-- end row -->
    </div> <!--  big container -->

</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url();?>template/wizard/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>template/wizard/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>template/wizard/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url();?>template/wizard/assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url();?>template/wizard/assets/js/jquery.validate.min.js"></script>

  <!-- Summernote -->
  <script src="<?php echo base_url();?>template/summernote/summernote-lite.js"></script>

  <script type="text/javascript">
    $('#summernote').summernote({
        placeholder: 'Descripe your summary or profile',
        tabsize: 2,
        height: 100
      });
  </script>

</html>
