<div class="resume-body p-5">
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3"> Add New Experience
		
		<a href="<?php echo base_url('home') ?>" class="btn btn-warning float-right"> 
    		<i class="fas fa-angle-double-left"></i> &nbsp; Go Back 
    	</a>

	</h2>

	<form action="<?php echo base_url('work/add') ?>" method="POST" class="mt-5">
		<div class="form-group row">
	    	<label for="position_label" class="col-sm-2 col-form-label"> Position </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="position" class="form-control" id="position_label" placeholder="Position Name">
	    	</div>
	  	</div>
		
		<div class="form-group row">
	    	<label for="company_label" class="col-sm-2 col-form-label"> Company Name </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="company" class="form-control" id="company_label" placeholder="Company Name">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="startyear_label" class="col-sm-2 col-form-label"> Start Year </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="startdate" class="form-control" id="startyear_label" placeholder="Start Year (e.g 2019 )">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="endyear_label" class="col-sm-2 col-form-label"> End Year </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="enddate" class="form-control" id="endyear_label" placeholder="End Year ( 2019 )">
	      		<small> If you are working current in that company, please type "present" </small>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="summernote" class="col-sm-2 col-form-label"> Description </label>
	    	
	    	<div class="col-sm-10">
	      		<textarea class="form-control" name="description" id="summernote"></textarea>
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