<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../template/favicon.ico"> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title> CV Builder </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

  <!-- Summernote -->
  <link rel="stylesheet" type="text/css" href="../summernote/summernote-lite.css">
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard.jpg')">


	<!--  Made With Get Shit Done Kit  -->
		<a href="" class="made-with-mk">
			<div class="brand"> << </div>
			<div class="made-with"> Go To <strong> Login </strong> </div>
		</a>

    <!--   Big container   -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <div class="wizard-container">

            <div class="card wizard-card" data-color="orange" id="wizardProfile">
              <form action="gender.php" method="POST">
                	
                <div class="wizard-header">
                  	<h3>
                  	   <b>BUILD</b> YOUR PROFILE <br>
                  	   <small>This information will let us know more about you.</small>
                  	</h3>
              	</div>

    						<div class="wizard-navigation">
    							<ul>
                    <li><a href="#about" data-toggle="tab">About</a></li>
                    <li><a href="#gender" data-toggle="tab">Gender</a></li>
                    <li><a href="#job" data-toggle="tab">Job</a></li>
                    <li><a href="#contact" data-toggle="tab">Contact</a></li>

                  </ul>
    						</div>

                <div class="tab-content">
                    <div class="tab-pane" id="about">
                      <div class="row">
                          <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                          <div class="col-sm-4 col-sm-offset-1">
                             <div class="picture-container">
                                  <div class="picture">
                                      <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                      <input type="file" id="wizard-picture">
                                  </div>
                                  <h6>Choose Picture</h6>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="form-group">
                                <label> Name <small>(required)</small></label>
                                <input name="name" type="text" class="form-control" placeholder="Andrew...">
                              </div>
                              <div class="form-group">
                                <label> Date of Birth <small>(required)</small></label>
                                <input name="dob" type="date" class="form-control">
                              </div>
                          </div>
                          <div class="col-sm-10 col-sm-offset-1">
                              <div class="form-group">
                                  <label>Email <small>(required)</small></label>
                                  <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                              </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="tab-pane" id="gender">
                        <h4 class="info-text"> Choose Gender? </h4>
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio">
                                        <input type="radio" name="jobb" value="Male">
                                        <div class="icon">
                                          <i class="fas fa-mars"></i>
                                        </div>
                                        <h6> Male </h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio">
                                        <input type="radio" name="jobb" value="Female">
                                        <div class="icon">
                                          <i class="fas fa-venus"></i>
                                        </div>
                                        <h6> Feamle </h6>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="choice" data-toggle="wizard-radio">
                                        <input type="radio" name="jobb" value="Other">
                                        <div class="icon">
                                          <i class="fas fa-mars-double"></i>
                                        </div>
                                        <h6> Other </h6>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="job">
                        <div class="row">
                          <div class="col-sm-12">
                            <h4 class="info-text"> Descripe about yours </h4>
                          </div>

                          <div class="col-sm-10 col-sm-offset-1 form-group">
                            <label> Job Title <small> ( If you are student, please type student. ) </small> </label>
                            <input type="text" name="job" class="form-control">
                            
                          </div>

                          <div class="col-sm-10 col-sm-offset-1 form-group">
                            <label> Carrer Summary </label>
                            <textarea class="form-control" id="summernote"></textarea>
                          </div>
                            
                        </div>
                    </div>

                    <div class="tab-pane" id="contact">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="info-text"> How can we contact you? </h4>
                            </div>

                            <div class="col-sm-10 col-sm-offset-1 form-group">
                            <label> Phone  </label>
                            <input type="text" name="job" class="form-control">
                            
                          </div>

                          <div class="col-sm-10 col-sm-offset-1 form-group">
                            <label> Address </label>
                            <textarea class="form-control"></textarea>
                          </div>
                            

                        </div>
                    </div>
                </div>
                
                <div class="wizard-footer height-wizard">
                    <div class="pull-right">
                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                    </div>

                    <div class="pull-left">
                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                    </div>
                    <div class="clearfix"></div>
                </div>

              </form>
            </div>
          </div> <!-- wizard container -->
        </div>
      </div><!-- end row -->
    </div> <!--  big container -->

</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

  <!-- Summernote -->
  <script src="../summernote/summernote-lite.js"></script>

  <script type="text/javascript">
    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
  </script>

</html>
