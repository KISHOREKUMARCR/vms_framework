<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>VMS</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/cosai.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/theme-default.css"  />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/pages/page-auth.css" /> 
<style>
.alert-success {
background-color: #07d06c;
border-color: #e9ecea;
color: #000;
}
</style>
</head>
<body>
    <div class="authentication-wrapper authentication-cover">
      <div class="authentication-inner row m-0">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
            <div class="flex-row text-center mx-auto">
                <img src="<?php echo base_url();?>assets\img\user_login.png" alt="Auth Cover Bg color" width="350" class="img-fluid authentication-cover-img" />
                <div class="mx-auto">
                    <h3>VMS- Video management system 🚀</h3>
                    <p>Video Analytical<br />start building your Kit today.</p>
                </div>
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
            <!-- Logo -->
            <div class="app-brand mb-4">
              <a href="index.html" class="app-brand-link gap-2 mb-2">
              <img src="<?php echo base_url();?>assets/img/cosai.png" width="50" height="50">
                <span class="app-brand-text demo h3 mb-0 fw-bold">COS AI</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">VMS starts here 🚀</h4>
            <p class="mb-4">Make your app management easy and fun!</p>            
            <form id="formAuthentication" class="mb-3" action="<?php echo base_url(); ?>register" method="POST">
              <?php if ($this->session->flashdata('success')) { ?>
                  <div class="alert alert-success" id="success-alert">
                      <?php echo $this->session->flashdata('success'); ?>
                  </div>
              <?php } ?>
              <?php if ($this->session->flashdata('error')) { ?>
                  <div class="alert alert-danger"  id="error-alert">
                      <?php echo $this->session->flashdata('error'); ?>
                  </div>
              <?php } ?>

              <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus />
                  <span class="error"><?php echo form_error('username'); ?></span>
              </div>

              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                  <span class="error"><?php echo form_error('email'); ?></span>
              </div>

              <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <span class="error"><?php echo form_error('password'); ?></span>
              </div>

              <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="confirm_password">Confirm Password</label>
                  <div class="input-group input-group-merge">
                      <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm_password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  <span class="error"><?php echo form_error('confirm_password'); ?></span>
              </div>

              <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="device_number">Device Id</label>
                  <div class="input-group input-group-merge">
                      <input type="text" name="device_number" class="form-control" placeholder="Device Number" value="" />
                  </div>
                  <span class="error"><?php echo form_error('device_number'); ?></span>
              </div>

              <input type="submit" class="btn btn-primary d-grid w-100" name="signupSubmit" value="Sign up">
          </form>


            <p class="text-center">
              <span>Already have an account?</span>
              <a href="<?php echo base_url();?>">
                <span>Sign in instead</span>
              </a>
            </p>

            <div class="divider my-4">
              <div class="divider-text">or</div>
            </div>

            <div class="d-flex justify-content-center">
              <a href="https://www.facebook.com/cosaimadurai" class="btn btn-icon btn-label-facebook me-3"><i class="tf-icons bx bxl-facebook"></i></a>
              <a href="https://www.linkedin.com/in/cosai/" class="btn btn-icon btn-label-linkedin me-3"><i class="tf-icons bx bxl-linkedin"></i></a>
              <a href="#" class="btn btn-icon btn-label-twitter"><i class="tf-icons bx bxl-twitter"></i></a>
            </div>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
</body>
<script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
<script src="<?php echo base_url();?>assets/vendor/js/template-customizer.js"></script>
<!-- <script src="<?php echo base_url();?>assets/js/config.js"></script>    -->
<script src="<?php echo base_url();?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url();?>assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/i18n/i18n.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?php echo base_url();?>assets/vendor/js/menu.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/js/main.js"></script> -->
<script src="<?php echo base_url();?>assets/js/pages-auth.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
 setTimeout(function () {
        $('#success-alert').fadeOut('slow');
        $('#error-alert').fadeOut('slow');
    }, 5000); // 5000 milliseconds = 5 seconds
</script>
</html>