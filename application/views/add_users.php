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
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/boxicons.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icons.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/core.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/css/rtl/theme-default.css"  />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/apex-charts/apex-charts.css" />
<script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
<script src="<?php echo base_url();?>assets/js/config.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
              <div class="app-brand demo">
                <a href="dashboard.php" class="app-brand-link"><img src="<?php echo base_url();?>assets/img/cosai.png" width="50" height="50"><span class="app-brand-text demo menu-text fw-bold ms-2">COS AI</span></a>
                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto"><i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i><i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i></a>
              </div>

              <div class="menu-divider mt-0"></div><div class="menu-inner-shadow"></div>

              <ul class="menu-inner py-1">
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Apps &amp; Pages</span></li>
                <li class="menu-item  "><a href="<?php echo base_url();?>admin_userlist" class="menu-link"> <i class="menu-icon tf-icons bx bx-home-circle"></i> <div data-i18n="User Lists">User Lists </div> </a>
                </li>
                <li class="menu-item  "><a href="<?php echo base_url();?>admin/add_users" class="menu-link"> <i class="menu-icon tf-icons bx bx-user"></i> <div data-i18n="User Lists">Add User</div> </a>
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

                          <img src="<?php echo base_url();?>assets/img/cosai.png" alt='cosai' class="rounded-circle" />
                        </div>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="<?php echo base_url();?>admin/logout" >
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
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">VMS /</span> Add User</h4>
              <div class="d-flex align-items-center justify-content-center" >

                  <div class=" p-5 m-5 shadow rounded-2" style="width: 60%">
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

                      <input type="submit" class="btn btn-primary d-grid w-100" name="signupSubmit" value="Add user">
                  </form>
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
