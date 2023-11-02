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
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="dashboard.php" class="app-brand-link"><img src="<?php echo base_url();?>assets/img/cosai.png" width="50" height="50"><span class="app-brand-text demo menu-text fw-bold ms-2">COS AI</span></a>
              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto"><i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i><i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i></a>
            </div>

            <div class="menu-divider mt-0"></div><div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Apps &amp; Pages</span></li>
              <li class="menu-item  ">
                <a href="<?php echo base_url();?>admin_userlist" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <div data-i18n="User Lists">User Lists </div> </a>
              </li>

            </ul>
        </aside>
        <div class="layout-page">

          <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-fluid">
              <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar avatar-online">
                        
                        <img src="<?php echo base_url();?>assets/img/cosai.png" alt class="rounded-circle" />
                      </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="logout.php" >
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Account
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>

                  </ul>

                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>

                    
                    <!-- Account -->
                    <form id="formAccountSettings" method="POST" action="<?php echo base_url();?>admin/edituser" enctype="multipart/form-data">
                    <div class="card-body">
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
                      <div class="d-flex align-items-start align-items-sm-center gap-4">

                      <img src="<?php echo base_url();?>assets/img/upload_image/<?php echo isset($vms_users_data['profile']) ? $vms_users_data['profile'] : ''; ?>" alt="user-avatar"class="d-block rounded"height="100"width="100"id="uploadedAvatar" />                        
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file"id="upload"class="account-file-input"hidden name="upload_img"/>
                          </label>
                        
                          <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">

                        <div class="row">
                        <h5 class="mb-3 font-weight-bold">User Details</h5>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">User Name</label>
                            <input class="form-control"type="text"id="firstName" name="username"value="<?php echo isset($vms_users_data['username']) ? $vms_users_data['username'] : ''; ?>"autofocus />
                              <!-- <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?> -->
                          </div>
                          

                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Device Id</label>
                            <input class="form-control" type="text" name="deviceid" id="lastName" value="<?php echo isset($vms_users_data['device_number']) ? $vms_users_data['device_number'] : ''; ?>" />
                            <?php echo form_error('deviceid', '<div class="text-danger">', '</div>'); ?>
                          </div>



                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text"id="email"name="email"value="<?php echo isset($vms_users_data['email']) ? $vms_users_data['email'] : ''; ?>" placeholder="demo@example.com" />
                            <?php echo form_error('email', '<div class="text-danger">', '</div>'); ?>
                          </div>



                          <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                          <label class="form-label" for="phone-number-mask">Phone Number</label>
                          <div class="input-group">
                          <span class="input-group-text">IND (+91)</span>
                          <input  type="text"id="phone"name="phoneNumber1"class="form-control phone-number-mask" value="<?php echo isset($vms_users_data['phone']) ? $vms_users_data['phone'] : ''; ?>" />                          
                          </div>
                          <?php echo form_error('phoneNumber1', '<div class="text-danger">', '</div>'); ?>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"  value="<?php echo isset($vms_users_data['address']) ? $vms_users_data['address'] : ''; ?>" placeholder="Address" />
                            <?php echo form_error('address', '<div class="text-danger">', '</div>'); ?>
                          </div>



                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input class="form-control" type="text" id="state" name="state"  value="<?php echo isset($vms_users_data['state']) ? $vms_users_data['state'] : ''; ?>" placeholder="state" />
                            <?php echo form_error('state', '<div class="text-danger">', '</div>'); ?>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input type="text"class="form-control"id="zipCode"name="zipCode"placeholder="231465"value="<?php echo isset($vms_users_data['zipcode']) ? $vms_users_data['zipcode'] : ''; ?>" maxlength="6" />
                            <?php echo form_error('zipCode', '<div class="text-danger">', '</div>'); ?>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select" name="country" ><option value="India" selected>India</option></select>
                          </div>


                          <h5 class="mb-3 font-weight-bold">Cloud Details</h5>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label"> Cloud Email Address:</label>
                            <input type="text" class="form-control" id="google_drive_email" name="google_drive_email"  value="<?php echo isset($vms_drive_data['google_drive_email']) ? $vms_drive_data['google_drive_email'] : ''; ?>" placeholder="CLOUD EMAIL" />
                            <?php echo form_error('google_drive_email', '<div class="text-danger">', '</div>'); ?>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Cloud Email Password</label>
                            <input type="text" class="form-control" id="google_drive_pass" name="google_drive_pass"  value="<?php echo isset($vms_drive_data['google_drive_pass']) ? $vms_drive_data['google_drive_pass'] : ''; ?>" placeholder="CLOUD PASSWORD" />
                            <?php echo form_error('google_drive_pass', '<div class="text-danger">', '</div>'); ?>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Cloud Secret Key </label>
                            <input type="text" class="form-control" id="google_drive_secretkey" name="google_drive_secretkey"  value="<?php echo isset($vms_drive_data['google_secret_key']) ? $vms_drive_data['google_secret_key'] : ''; ?>" placeholder="CLOUD SECRET KEY" />
                            <?php echo form_error('google_drive_secretkey', '<div class="text-danger">', '</div>'); ?>
                          </div>

                        <!-- ########################################################################################## -->
                        


                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Cloud Folder Id </label>
                            <input type="text" class="form-control" id="google_drive_folderid" name="google_drive_folderid"  value="" placeholder="CLOUD FOLDER ID" />
                            <?php echo form_error('google_drive_folderid', '<div class="text-danger">', '</div>'); ?>
                          </div>


                           <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Cloud Service JsonKey Path </label>
                            <input type="text" class="form-control" id="google_drive_servicejson" name="google_drive_servicejson"  value="" placeholder="CLOUD JSON KEY PATH" />
                            <?php echo form_error('google_drive_servicejson', '<div class="text-danger">', '</div>'); ?>
                          </div>

                          <!-- ########################################################################################## -->

                          <h5 class="mb-3 font-weight-bold">KIT   Detail's</h5>


                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">KIT   SSID:</label>
                            <input type="text" class="form-control" id="raspi_ssid" name="raspi_ssid"  value="<?php echo isset($vms_drive_data['raspi_ssid']) ? $vms_drive_data['raspi_ssid'] : ''; ?>" placeholder="KIT SSID" />
                            <?php echo form_error('raspi_ssid', '<div class="text-danger">', '</div>'); ?>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">KIT   Password</label>
                            <input type="text" class="form-control" id="raspi_pass" name="raspi_pass"  value="<?php echo isset($vms_drive_data['raspi_pass']) ? $vms_drive_data['raspi_pass'] : ''; ?>" placeholder="KIT PASSWORD" />
                            <?php echo form_error('raspi_pass', '<div class="text-danger">', '</div>'); ?>
                          </div>


                          <h5 class="mb-3 font-weight-bold">VNC Viewer Detail's</h5>


                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">VNC Viewer Username:</label>
                            <input type="text" class="form-control" id="vnc_username" name="vnc_username"  value="<?php echo isset($vms_drive_data['vnc_name']) ? $vms_drive_data['vnc_name'] : ''; ?>" placeholder="vnc_username" />
                            <?php echo form_error('vnc_username', '<div class="text-danger">', '</div>'); ?>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label"> VNC Viewer Password:</label>
                            <input type="text" class="form-control" id="vnc_pass " name="vnc_pass"  value="<?php echo isset($vms_drive_data['vnc_password']) ? $vms_drive_data['vnc_password'] : ''; ?>" placeholder="vnc_pass" />
                            <?php echo form_error('vnc_pass', '<div class="text-danger">', '</div>'); ?>
                          </div>
                        </div>

                        <div class="mt-2">

                          <input type="submit" class="btn btn-primary me-2">
                          
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>

                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">

            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
</body>
    <script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
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
    
</html>