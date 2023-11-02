<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>VMS</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/cosai.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/js/template-customizer.js"></script>
    <script src="<?php echo base_url();?>assets/js/config.js"></script>
  </head>
<body>
<div class="authentication-wrapper authentication-cover">
    <div class="authentication-inner row m-0">
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
            <div class="flex-row text-center mx-auto">
                <img src="<?php echo base_url();?>assets\img\user_login.png" width="350" class="img-fluid ">  
                <div class="mx-auto "><br>
                    <h3>AI Based Video Management System 🥳</h3>
                    <p>Perfectly suited for traffic analytical <br /></p>
                </div>
            </div>
        </div>
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <div class="app-brand mb-4">
                    <a href="index.php" class="app-brand-link gap-2 mb-2"><img src="<?php echo base_url();?>assets/img/cosai.png" width="50" height="50"><span class="app-brand-text demo h3 mb-0 fw-bold">COS AI</span></a>
                </div>
                <h4 class="mb-2">Welcome to COSAI! 👋</h4>
                <p class="mb-4">Please sign-in to your account and start the adventure</p>

                <?php if ($this->session->flashdata('login_error')) { ?>
                <div class="alert alert-danger"  id="error-alert">
                <?php echo $this->session->flashdata('login_error'); ?>
                </div>
                <?php } ?>
                <form id="formAuthentication" class="mb-3" action="<?php echo base_url();?>" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
                    <span class="error"><?php echo form_error('email'); ?></span>                    
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                        <!-- <a href="auth-forgot-password-cover.html"> <small>Forgot Password?</small></a> -->
                    </div>
                    <div class="input-group input-group-merge">
                        <input  type="password" id="password"class="form-control"name="password"placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        
                    </div>
                    <span class="error"><?php echo form_error('password'); ?></span>  
                </div>                        
                <!-- <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember-me" />
                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                    </div>
                </div> -->
                
                <input type='submit'  class="btn btn-primary d-grid w-100" class="submitsignin" value="Sign in">
                </form>
                <!-- <p class="text-center"> <span>New on our platform?</span><a href="auth-register-cover.php"> <span>Create an account</span></a></p> -->
                <div class="divider my-4">
                    <div class="divider-text">Visit Our platform</div>
                </div>
                
                <div class="d-flex justify-content-center">
                    <a href="https://www.facebook.com/cosaimadurai" class="btn btn-icon btn-label-facebook me-3"><i class="tf-icons bx bxl-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/cosai/" class="btn btn-icon btn-label-linkedin me-3"><i class="tf-icons bx bxl-linkedin"></i></a>
                    <a href="#" class="btn btn-icon btn-label-twitter"><i class="tf-icons bx bxl-twitter"></i></a>
                </div>


            </div>
        </div>  
    </div>
</div>
</body>
  

    <script src="<?php echo base_url();?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/libs/hammer/hammer.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?php echo base_url();?>assets/js/pages-auth.js"></script>
</html>