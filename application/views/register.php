<form action="<?php echo base_url(); ?>registered" method="POST" enctype="multipart/form-data">
                	
  <div class="wizard-header">
    	<h3>
    	   <b>BUILD</b> YOUR PROFILE <br>
    	   <small>This information will let us know more about you.</small>
    	</h3>
	</div>

	<div class="wizard-navigation">
		<ul>
      <li><a href="#about" data-toggle="tab">About</a></li>
      <li><a href="#jobtab" data-toggle="tab">Job</a></li>
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
                        <img src="<?php echo base_url(); ?>template/wizard/assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                        <input type="file" id="wizard-picture" name="photo">
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
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                        <label class="form-check-label" for="male">
                          Male
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                        <label class="form-check-label" for="female">
                          Female
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                        <label class="form-check-label" for="other">
                          Other
                        </label>
                      </div>
                    </div>
                  </div>

                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
              <div class="form-group">
                <label> Date of Birth <small>(required)</small></label>
                <input name="dob" type="date" class="form-control">
              </div>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group">
                    <label>Email <small>(required)</small></label>
                    <input name="email" type="email" class="form-control" placeholder="aa@gmail.com">
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div class="form-group">
                    <label>Password <small>(required)</small></label>
                    <input name="password" type="password" class="form-control">
                </div>
            </div>

        </div>
      </div>
      
      <div class="tab-pane" id="jobtab">
          <div class="row">
            <div class="col-sm-12">
              <h4 class="info-text"> Descripe about yours </h4>
            </div>

            <div class="col-sm-10 col-sm-offset-1 form-group">
              <label> Job Title <small> ( If you are student, please type student. ) </small> </label>
              <input type="text" name="jobtitle" class="form-control">
              
            </div>

            <div class="col-sm-10 col-sm-offset-1 form-group">
              <label> Carrer Summary </label>
              <textarea class="form-control" id="summernote" name="description"></textarea>
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
              <input type="text" name="phone" class="form-control">
              
            </div>

            <div class="col-sm-10 col-sm-offset-1 form-group">
              <label> Address </label>
              <textarea class="form-control" name="address"></textarea>
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