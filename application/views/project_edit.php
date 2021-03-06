<div class="resume-body p-5">
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3"> Update Existing Project
		
		<a href="<?php echo base_url('home') ?>" class="btn btn-warning float-right"> 
    		<i class="fas fa-angle-double-left"></i> &nbsp; Go Back 
    	</a>

	</h2>

	<form action="<?php echo base_url('project/update') ?>" method="POST" class="mt-5" enctype="multipart/form-data">
		
		<input type="hidden" name="id" value="<?php echo $projectlist['project_id']; ?>">
		<input type="hidden" name="oldphoto" value="<?php echo $projectlist['project_cover']; ?>">
		
		<img src="<?php echo base_url($projectlist['project_cover']) ?>" class="img-fluid">

		<div class="form-group row">
	    	<label for="project_label" class="col-sm-2 col-form-label"> Name </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="text" name="name" class="form-control" id="project_label" placeholder="Project Name" value="<?php echo $projectlist['project_name']; ?>">
	    	</div>
	  	</div>
		
		<div class="form-group row">
	    	<label for="project_label" class="col-sm-2 col-form-label"> Project Cover </label>
	    	
	    	<div class="col-sm-10">
	      		<input type="file" name="newphoto" class="form-control" id="project_label">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="summernote" class="col-sm-2 col-form-label"> Description </label>
	    	
	    	<div class="col-sm-10">
	      		<textarea class="form-control" name="description" id="summernote"> <?php echo $projectlist['project_description']; ?> </textarea>
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