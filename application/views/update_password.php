<?php $orginal_password= $vms_users_data['password']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/core.css"  />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/pages/page-profile.css" />
    <script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
    <script src="<?php echo base_url();?>assets/js/config.js"></script>
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
    <?php  include('main_aside.php');  ?>
        <div class="layout-page">
        <?php include('side_nav.php');?>
        <div class="content-wrapper">

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Account /</span> Edit Profile</h4>
              <div class="row justify-content-center">
                <div class="col-md-6">

                  <br>
                  <div class="card mb-6">

                      <!-- Ac count -->
                      <form id="formAuthentication" method="POST" action="<?php echo base_url();?>User/update_password" enctype="multipart/form-data">
                      <div class="card-body">
                      <h5 class="card-header">Update Password</h5>
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
                      </div>
                      <hr class="my-0" />
                      <div class="card-body">
                      <h5 class="mb-3 font-weight-bold">Change Password</h5>
                      <div class="mb-3 form-password-toggle">
                      <label class="form-label" for="current_password">Current Password</label>
                      <div class="input-group input-group-merge">
                      <input type="password" id="current_password" class="form-control" name="current_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="current_password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                      </div>
                      <span class="error"><?php echo form_error('current_password'); ?></span>
                      </div>

                      <div class="mb-3 form-password-toggle">
                      <label class="form-label" for="new_password">New Password</label>
                      <div class="input-group input-group-merge">
                      <input type="password" id="new_password" class="form-control" name="new_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="new_password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                      </div>
                      <span class="error"><?php echo form_error('new_password'); ?></span>
                      </div>

                      <div class="mb-3 form-password-toggle">
                      <label class="form-label" for="confirm_password">Confirm Password</label>
                      <div class="input-group input-group-merge">
                      <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm_password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                      </div>
                      <span class="error"><?php echo form_error('confirm_password'); ?></span>
                      </div>

                      <div class="mt-6">
                      <input type="submit" class="btn btn-primary me-6 justify-content-center">
                      </div>
                      </div>
                      </form>

                    <!-- /Account -->
                  </div>

                </div>
              </div>
            </div>
            <div class="content-backdrop fade"></div>
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
setTimeout(function () {
   $('#success-alert').fadeOut('slow');
   $('#error-alert').fadeOut('slow');
}, 5000); // 5000 milliseconds = 5 seconds
</script>
</html>
