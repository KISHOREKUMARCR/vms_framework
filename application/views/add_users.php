<!DOCTYPE html>
<html lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<title>ADMIN-VMS</title>
<meta name="description" content="" />
<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/cosai.png" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/boxicons.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icons.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/core.css" />

<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/theme-default.css"  />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

<script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
<script src="<?php echo base_url();?>assets/js/config.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/pages/page-auth.css" />
<script src="<?php echo base_url();?>assets/vendor/js/template-customizer.js"></script>


</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('admin_aside.php');?>
        <div class="layout-page">
          <?php include('admin_sidenav.php');?>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">VMS /</span> Add User</h4>
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-8 mb-4">
                  <div class="card ">
                    <h5 class="card-header ">Register</h5>
                    <div class="row d-flex align-items-center justify-content-center">
                      <div class="col-md-8 mb-5 align-items-center">
                                <form id="formAuthentication" method="POST" action="<?php echo base_url(); ?>admin/add_users">

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
                                <span class="input-group-text cursor-pointer" id="showCustomPasswordButton"><i class="bx bx-hide"></i></span>
                                </div>
                                <span class="error"><?php echo form_error('password'); ?></span>
                                </div>

                                <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="confirm_password">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm_password" />
                                <span class="input-group-text cursor-pointer" id="showCustomPasswordButton"><i class="bx bx-hide"></i></span>
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

                                <input type="submit" class="btn btn-primary d-grid w-100" name="signupSubmit" value="Add user">
                                </form>

                        </div>
                      </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="content-backdrop fade mb-3"></div>
        </div>
    </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
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
<script src="<?php echo base_url();?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    const passwordInput = document.getElementById('customPassword');
    const showPasswordButton = document.getElementById('showCustomPasswordButton');
​
    showPasswordButton.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordButton.innerHTML = '<i class="bx bx-show"></i>';
        } else {
            passwordInput.type = 'password';
            showPasswordButton.innerHTML = '<i class="bx bx-hide"></i>';
        }
    });

 setTimeout(function () {
        $('#success-alert').fadeOut('slow');
        $('#error-alert').fadeOut('slow');
    }, 5000); // 5000 milliseconds = 5 seconds
</script>


</html>
