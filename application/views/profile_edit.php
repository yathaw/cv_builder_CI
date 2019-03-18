<div class="resume-body p-5">
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3">  Update Profile Data
		
		<a href="<?php echo base_url('home') ?>" class="btn btn-warning float-right"> 
    		<i class="fas fa-angle-double-left"></i> &nbsp; Go Back 
    	</a>

	</h2>

	<form action="<?php echo base_url('profile/update') ?>" method="POST" class="mt-5" enctype="multipart/form-data">
		
		<input type="hidden" name="userid" value="<?php echo $profilelist['user_id']; ?>">
		<input type="hidden" name="userdetailid" value="<?php echo $profilelist['userdetail_id']; ?>">

		<input type="hidden" name="oldphoto" value="<?php echo $profilelist['user_profile']; ?>">

		<input type="hidden" name="password" value="<?php echo $profilelist['user_password']; ?>">
		
		<img src="<?php echo base_url($profilelist['user_profile']) ?>" class="img-fluid" width="100px" height="100px">


		<div class="form-group row">
	    	<label for="name_label" class="col-sm-2 col-form-label"> Name </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="name" class="form-control" id="name_label" placeholder="User Name" value="<?php echo $profilelist['user_name']; ?>">
	    	</div>
	  	</div>
		
		<div class="form-group row">
	    	<label for="profile_label" class="col-sm-2 col-form-label"> Profile </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="file" name="newphoto" class="form-control" id="profile_label">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="dob_label" class="col-sm-2 col-form-label"> Date Of Birth </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="date" name="dob" class="form-control" id="dob_label" placeholder="User DOB" value="<?php echo $profilelist['userdetail_dob']; ?>">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="Gender_label" class="col-sm-2 col-form-label"> Gender </label>
	    	
	    	<div class="col-sm-10">
	      		<div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php echo $profilelist['user_gender'] == 'Male' ? "checked" : ""; ?>>
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php echo $profilelist['user_gender'] == 'Female' ? "checked" : ""; ?>>
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="Other" <?php echo $profilelist['user_gender'] == 'Other' ? "checked" : ""; ?>>
                    <label class="form-check-label" for="other">
                        Other
                    </label>
                </div>

	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="phone_label" class="col-sm-2 col-form-label"> Phone </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="phone" class="form-control" id="phone_label" placeholder="User Phone" value="<?php echo $profilelist['userdetail_phone']; ?>">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="address_label" class="col-sm-2 col-form-label"> Address </label>
	    	
	    	<div class="col-sm-10">
	      		<textarea class="form-control" name="address"> <?php echo $profilelist['userdetail_address'] ?> </textarea>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="email_label" class="col-sm-2 col-form-label"> Email </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="email" name="email" class="form-control" id="email_label" placeholder="User DOB" value="<?php echo $profilelist['user_email']; ?>">
	    	</div>
	  	</div>



	  	<div class="form-group row">
	    	<label for="title_label" class="col-sm-2 col-form-label"> Job Title </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="jobtitle" class="form-control" id="title_label" placeholder="User Name" value="<?php echo $profilelist['userdetail_jobtitle']; ?>">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="summernote" class="col-sm-2 col-form-label"> Description </label>
	    	
	    	<div class="col-sm-10">
	      		<textarea class="form-control" name="description" id="summernote"> <?php echo $profilelist['userdetail_description']; ?> </textarea>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	  		<div class="col-sm-2"></div>
	  		<div class="col-sm-10">
		  		<button type="submit" class="btn btn-warning">
		  			<i class="fas fa-save"></i> Update
		  		</button>
		  	</div>
	  	</div>

	</form>

	<script type="text/javascript">
      $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
    </script>


</div>