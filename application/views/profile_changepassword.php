<div class="resume-body p-5">
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3"> Change Password
		
		<a href="<?php echo base_url('home') ?>" class="btn btn-warning float-right"> 
    		<i class="fas fa-angle-double-left"></i> &nbsp; Go Back 
    	</a>

	</h2>

	<form action="<?php echo base_url('profile/changeprocess') ?>" method="POST" class="mt-5">
		
		<input type="hidden" name="id" value="<?php echo $profilelist['user_id']; ?>">
		<input type="hidden" name="photo" value="<?php echo $profilelist['user_profile']; ?>">
		<input type="hidden" name="name" value="<?php echo $profilelist['user_name']; ?>">
		<input type="hidden" name="gender" value="<?php echo $profilelist['user_gender']; ?>">
		<input type="hidden" name="email" value="<?php echo $profilelist['user_email']; ?>">


		<div class="form-group row">
	    	<label for="password_label" class="col-sm-2 col-form-label"> Chane Password </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="password" name="password" class="form-control" id="password_label">
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



</div>