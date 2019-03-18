

<form action="<?php echo base_url(); ?>login" method="POST">
                
  <div class="wizard-header">
      <h3>
         <b>Welcome Back! </b> <br>
         <small>To keep connected with us please login with your personal information <br> by email address and password </small>
      </h3>
  </div>

  <?php if ($this->session->flashdata('success')): ?>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 form-group">
        <div class="alert alert-success fade in">
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          <strong>Success!</strong> <?php echo $this->session->flashdata('success');  ?> 
        </div>
      </div>
    </div>

  <?php endif; ?>

  <?php if (isset($error_message)): ?>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 form-group">
        <div class="alert alert-danger fade in">
          <a href="#" class="close" data-dismiss="alert">&times;</a>
          <strong>Try Agin!</strong>
            <?php echo $error_message; ?> 
        </div>
      </div>
    </div>

  <?php endif; ?>



  <div class="row">
    <div class="col-sm-10 col-sm-offset-1 form-group">
      <label> Email </label>
      <input type="text" name="email" class="form-control">
      
    </div>

    <div class="col-sm-10 col-sm-offset-1 form-group">
      <label> Password </label>
      <input type="password" name="password" class="form-control">
    </div>
    
    <div class="wizard-footer height-wizard">
      <div class="col-sm-10 col-sm-offset-1 form-group">
        <div class="pull-right">
            <input type='submit' class='btn btn-fill btn-warning btn-wd btn-sm' value='Login' />
        </div>
      </div>
    </div>

  </div>

</form>