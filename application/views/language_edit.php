<div class="resume-body p-5">
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3"> Update Existing Language
		
		<a href="<?php echo base_url('home') ?>" class="btn btn-warning float-right"> 
    		<i class="fas fa-angle-double-left"></i> &nbsp; Go Back 
    	</a>

	</h2>

	<form action="<?php echo base_url('language/update') ?>" method="POST" class="mt-5">
		
		<input type="hidden" name="id" value="<?php echo $languagelist['language_id']; ?>">

		<div class="form-group row">
	    	<label for="position_label" class="col-sm-2 col-form-label"> Skills </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="name" class="form-control" id="position_label" placeholder="Language" value="<?php echo $languagelist['language_name']; ?>" data-role="tagsinput">
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