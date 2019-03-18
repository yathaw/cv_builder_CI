
<div class="resume-body p-5">
    <section class="resume-section summary-section mb-5">
	    <h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-3">Career Summary
	    	<a href="" class="btn btn-warning float-right btn-sm"> 
	    		<i class="fas fa-edit"></i> &nbsp; Edit 
	    	</a>
		</h2>
	    <div class="resume-section-content">
		    <p class="mb-0">
		    	<?php echo $datalist['userdetail_description'] ?>
		    </p>
	    </div>
    </section><!--//summary-section-->
    <div class="row">
	    <div class="col-lg-8">
		    <section class="resume-section experience-section mb-5">
			    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience
			    	<a href="<?php echo base_url('work') ?>" class="btn btn-info float-right btn-sm">
			    		<i class="fas fa-plus"></i> &nbsp; Add 
			    	</a>
			    </h2>
			    <div class="resume-section-content">
				    <div class="resume-timeline position-relative">
						
						<?php foreach($experiencelist as $experience): ?>

					    <article class="resume-timeline-item position-relative pb-5">
						    
						    <div class="resume-timeline-item-header mb-2">
							    <div class="d-flex flex-column flex-md-row">
							        <h3 class="resume-position-title font-weight-bold mb-1">
							        	<?php echo $experience->experience_position ?>
							        	<a href="<?php echo base_url('work/edit/'.$experience->experience_id)?>" class="btn btn-warning btn-sm"> 
								    		<i class="fas fa-edit"></i> &nbsp; Edit 
								    	</a>

							        </h3>
							        <div class="resume-company-name ml-auto">
										<?php echo $experience->experience_companyname ?>
							        </div>
							    </div><!--//row-->
							    <div class="resume-position-time">
							    <?php echo $experience->experience_startdate ?> - 
							    <?php echo $experience->experience_enddate ?>
							    	
							    </div>
						    </div><!--//resume-timeline-item-header-->
						    <div class="resume-timeline-item-desc">
							    <p>
							    		
							    	<?php echo $experience->experience_description?>
							    </p>
						    </div><!--//resume-timeline-item-desc-->

					    </article><!--//resume-timeline-item-->
					    
					    <?php endforeach; ?>
					    
				    </div><!--//resume-timeline-->    
			    </div>
		    </section><!--//experience-section-->
	    </div>
	    <div class="col-lg-4">
		    <section class="resume-section skills-section mb-5">
			    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
			    	Skills 

			    	<?php if($skilllist): ?>
						
						<a href="<?php echo base_url('skill/edit/'.$skilllist['skill_id']); ?>" class="btn btn-warning float-right btn-sm"> 
				    		<i class="fas fa-edit"></i> &nbsp; Edit 
				    	</a>
				    <?php else: ?>
				    	<a href="<?php echo base_url('skill') ?>" class="btn btn-info float-right btn-sm"> 
				    		<i class="fas fa-plus"></i> &nbsp; Add 
				    	</a>
				    <?php endif; ?>

			    </h2>
			    <div class="resume-section-content">
			        <div class="resume-skill-item">
			        	<?php if($skilllist): ?>
			            <ul class="list-inline">
			            	<?php 
			            		$skill = $skilllist['skill_name'];
			            		$skill_array = explode(',', $skill);
			            		$skill_count = sizeof($skill_array);
			            		for($x = 0; $x < $skill_count; $x++):
			            	?>
				            <li class="list-inline-item">
				            	<span class="badge badge-warning"> <?php echo $skill_array[$x]; ?> </span>
				            </li>
				        	<?php endfor; ?>
			            </ul>
			        	<?php endif; ?>
			        </div><!--//resume-skill-item-->
			    </div><!--resume-section-content-->
		    </section><!--//skills-section-->
		    <section class="resume-section education-section mb-5">
			    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
			    	Education

			    	<a href="<?php echo base_url('education') ?>" class="btn btn-info btn-sm float-right"> 
			    		<i class="fas fa-plus"></i> &nbsp; Add 
			    	</a>

			    </h2>
			    <div class="resume-section-content">
				    <ul class="list-unstyled">
						
						<?php foreach ($educationlist as $education):?>

					    <li class="mb-5">
					        <div class="resume-degree font-weight-bold">
					        	<?php echo $education->education_achievement ?>
					        	<a href="<?php echo base_url('education/edit/'.$education->education_id) ?>" class="btn btn-warning btn-sm float-right mr-2"> 
						    		<i class="fas fa-edit"></i> &nbsp; Edit 
						    	</a>
					        </div>
					        <div class="resume-degree-org">
					        	<?php echo $education->education_name; ?> <br>
					        	<span>
					        		<?php echo $education->education_country ?>
					        	</span>
					        </div>
					        <div class="resume-degree-time">
					        	<p>
					        		<?php echo $education->education_major ?>
				        		<span class="float-right">
				        			<?php echo $education->education_acceptyear ?>
				        		</span>
					        	</p>
					        </div>
					    </li>

					<?php endforeach; ?>

				    </ul>
			    </div>
		    </section><!--//education-section-->
		    
		    <section class="resume-section language-section mb-5">
			    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
			    	Language
					
					<?php if($languagelist): ?>
						
						<a href="<?php echo base_url('language/edit/'.$languagelist['language_id']) ?>" class="btn btn-warning float-right btn-sm"> 
				    		<i class="fas fa-edit"></i> &nbsp; Edit 
				    	</a>
				    <?php else: ?>
				    	<a href="<?php echo base_url('language') ?>" class="btn btn-info float-right btn-sm"> 
				    		<i class="fas fa-plus"></i> &nbsp; Add 
				    	</a>
				    <?php endif; ?>

			    </h2>
			    <div class="resume-section-content">
				    <ul class="list-unstyled resume-lang-list">
				    	<?php 
		            		$language = $languagelist['language_name'];
		            		$language_array = explode(',', $language);
		            		$language_count = sizeof($language_array);
		            		for($x = 0; $x < $language_count; $x++):
		            	?>

					    <li class="mb-2">
					    	<span class="resume-lang-name font-weight-bold">
					    		<?php echo $language_array[$x]; ?>
					    	</span>
					    </li>

					    <?php endfor; ?>
				    </ul>
			    </div>
		    </section><!--//language-section-->

		    
	    </div>
    </div><!--//row-->
	
	<h2 class="resume-section-title text-uppercase font-weight-bold pb-4 mb-5">  Project
	    	<a href="<?php echo base_url('project') ?>" class="btn btn-info float-right btn-sm"> 
	    		<i class="fas fa-plus"></i> &nbsp; Add 
	    	</a>

		</h2>

	<div class="row">
		<?php foreach($projectlist as $project): ?>
		<div class="col-lg-6">
			<div class="card">
			  	<img src="<?php echo base_url(); ?><?php echo $project->project_cover ?>" class="card-img-top img-fluid" style="height: 300px">
			  	<div class="card-body">
			  		<h3> 
			  			<?php echo $project->project_name ?> 
						<a href="<?php echo base_url('project/edit/'.$project->project_id) ?>" class="btn btn-warning btn-sm float-right mr-2"> 
				    		<i class="fas fa-edit"></i> &nbsp; Edit 
				    	</a>
			  		</h3>
			    	<p class="card-text">
			    		<?php echo $project->project_description; ?>
			    	</p>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		
		
	</div>

</div><!--//resume-body-->
	    
	    
