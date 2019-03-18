<!DOCTYPE html>
<html lang="en"> 
<head>
    <title> CV Builder </title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Resume Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="<?php echo base_url();?>template/cvform/favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url();?>template/cvform/assets/css/pillar-1.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
    
    
    <!-- Tags Input -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/tagsinput/tagsinput.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>template/tagsinput/tagsinput.js"></script>

</head> 

<body>	

    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="media flex-column flex-md-row">
                    <img class="mr-3 img-fluid picture mx-auto" src="<?php echo base_url(); ?><?php echo $datalist['user_profile'] ?>" alt="" style="height: 220px;">
                    <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
                        <div class="primary-info">
                            <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
                                <?php echo $datalist['user_name'] ?>
                            </h1>
                            <div class="title mb-1">
                                <?php echo $datalist['userdetail_jobtitle'] ?>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>
                                    <?php echo $datalist['user_email'] ?>
                                </li>
                                <li>
                                    <i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>
                                    <?php echo $datalist['userdetail_phone'] ?>
                                </li>

                                <li>
                                    <i class="fas fa-calendar fa-fw mr-2" data-fa-transform="grow-3"></i>
                                    <?php echo $datalist['userdetail_dob'] ?>
                                </li>

                                <li>
                                    <i class="fas fa-map-marked-alt fa-fw mr-2" data-fa-transform="grow-3"></i>
                                    <?php echo $datalist['userdetail_address'] ?>
                                </li>

                            </ul>
                        </div><!--//primary-info-->
                        <div class="secondary-info ml-md-auto mt-2">
                            
                            <ul class="resume-social list-unstyled">
                                <?php if($this->uri->segment(2)=="edit"){ ?>
                                <?php }else{ ?>
                                <li class="mb-3">
                                    <a href="<?php echo base_url('profile/edit') ?>" class="btn btn-warning text-dark text-center btn-sm" style="width: 200px;">
                                        <i class="fas fa-edit"></i> &nbsp; Edit Profile
                                    </a>
                                </li>
                                <?php } ?>
                                
                                <?php if($this->uri->segment(2)=="changepassword"){ ?>
                                <?php }else{ ?>

                                <li class="mb-3">
                                    <a href="<?php echo base_url('profile/changepassword') ?>" class="btn btn-warning text-dark text-center btn-sm" style="width: 200px;">
                                        <i class="fas fa-key"></i> &nbsp; Change Password
                                    </a>
                                </li>

                                <?php } ?>
                                

                                <li class="mb-3">
                                    <a href="" class="btn btn-light text-dark text-center btn-sm" style="width: 200px"> 
                                        <i class="fas fa-download"></i> Download CV 
                                    </a>
                                </li>

                                <li class="mb-3">
                                    <a href="<?php echo base_url('logout') ?>" class="btn btn-danger text-white text-center btn-sm" style="width: 200px"> 
                                        <i class="fas fa-power-off"></i> Logout
                                    </a>
                                </li>
                            </ul>

                            
                        </div><!--//secondary-info-->
                        
                    </div><!--//media-body-->
                </div><!--//media-->
            </header>

            <?php $this->load->view($innerdata); ?>
          
        </div>
    </article>
    

</body>

</html> 

