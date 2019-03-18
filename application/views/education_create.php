<div class="resume-body p-5">
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3"> Add New Education
		
		<a href="<?php echo base_url('home') ?>" class="btn btn-warning float-right"> 
    		<i class="fas fa-angle-double-left"></i> &nbsp; Go Back 
    	</a>

	</h2>

	<form action="<?php echo base_url('education/add') ?>" method="POST" class="mt-5">
		<div class="form-group row">
	    	<label for="position_label" class="col-sm-2 col-form-label"> Education Name </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="name" class="form-control" id="position_label" placeholder="University of Yangon">
	    	</div>
	  	</div>
		
		<div class="form-group row">
	    	<label for="company_label" class="col-sm-2 col-form-label"> Achievement </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="achievement" class="form-control" id="company_label" placeholder="B.Sc ( Yangon )">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="startyear_label" class="col-sm-2 col-form-label"> Major </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="major" class="form-control" id="startyear_label" placeholder="Information Technology">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="endyear_label" class="col-sm-2 col-form-label"> Accepted Year </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="acceptyear" class="form-control" id="endyear_label" placeholder="2019">
	      		
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="country_label" class="col-sm-2 col-form-label"> Country </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="country" class="form-control" id="country_label" placeholder="Myanmar">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	  		<div class="col-sm-2"></div>
	  		<div class="col-sm-10">
		  		<button type="submit" class="btn btn-warning">
		  			<i class="fas fa-save"></i> Save
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