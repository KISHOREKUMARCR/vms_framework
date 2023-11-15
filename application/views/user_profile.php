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
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Account /</span> User Profile</h4>

            <!-- Header -->
            <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="user-profile-header-banner">
                      <img src=" <?php echo base_url();?>assets/img/profile-banner.png" alt="Banner image" class="rounded-top" />
                    </div>
                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                      <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="<?php echo base_url();?>assets/img/upload_image/<?php echo isset($vms_users_data['profile']) ? $vms_users_data['profile'] : ''; ?>"alt="user image"class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img" />
                      </div>
                      <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                          class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                          <div class="user-profile-info">
                            <h4><?php echo isset($vms_users_data['username']) ? $vms_users_data['username'] : ''; ?></h4>
                            <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">

                              <li class="list-inline-item fw-semibold">
                                <i class="bx bx-calendar-alt"></i> Joined <?php echo isset($vms_users_data['time']) ? $vms_users_data['time'] : ''; ?>
                              </li>
                            </ul>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Header -->

              <!-- Navbar pills -->
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Profile</a>
                    </li>


                  </ul>
                </div>
              </div>
              <!--/ Navbar pills -->

              <!-- User Profile Content -->
              <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5">
                  <!-- About User -->
                  <div class="card mb-6">
                    <div class="card-body">
                      <small class="text-muted text-uppercase">About</small>
                      <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span>
                          <span><?php echo isset($vms_users_data['username']) ? $vms_users_data['username'] : ''; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-check"></i><span class="fw-semibold mx-2">Device Status:</span> <span>Active</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-star"></i><span class="fw-semibold mx-2">Device ID:</span> <span><?php echo isset($vms_users_data['device_number']) ? $vms_users_data['device_number'] : ''; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span><?php echo isset($vms_users_data['country']) ? $vms_users_data['country'] : ''; ?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-detail"></i><span class="fw-semibold mx-2">State:</span>
                          <span><?php echo isset($vms_users_data['state']) ? $vms_users_data['state'] : ''; ?></span>
                        </li>
                      </ul>
                      <small class="text-muted text-uppercase">Contacts</small>
                      <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span>
                          <span><?php echo isset($vms_users_data['phone']) ? $vms_users_data['phone'] : ''; ?></span>
                        </li>

                        <li class="d-flex align-items-center mb-3">
                          <i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span>
                          <span><?php echo isset($vms_users_data['email']) ? $vms_users_data['email'] : ''; ?></span>
                        </li>
                      </ul>

                    </div>
                  </div>

                </div>

                <div class="col-xl-8 col-lg-7 col-md-7">
                  <!-- Activity Timeline -->
                  <div class="card card-action mb-4">
                    <div class="card-header align-items-center">
                      <h5 class="card-action-title mb-0"><i class="bx bx-list-ul bx-sm me-2"></i>CLIENT DETAILS</h5>

                    </div>
                    <div class="card-body">
                      <ul class="timeline ms-2">


                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-warning"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Google Drive Detail's:</h6>
                            </div>
                            <p class="mb-2">Mail Id:  <span class="fw-semibold mx-2"><?php echo isset($vms_drive_data['google_drive_email']) ? $vms_drive_data['google_drive_email'] : ''; ?></span></p>
                            <p class="mb-2">Mail password: <span class="fw-semibold mx-2"><?php echo "*********";?></span></p>
                            <p class="mb-2">Mail Secret Key: <span class="fw-semibold mx-2"><?php echo isset($vms_drive_data['google_secret_key']) ? $vms_drive_data['google_secret_key'] : ''; ?></span></p>
                          </div>
                        </li>



                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">Rasbperry PI Details:</h6>
                            </div>
                            <p class="mb-2">SSID:  <span class="fw-semibold mx-2"><?php echo isset($vms_drive_data['raspi_ssid']) ? $vms_drive_data['raspi_ssid'] : ''; ?></span></p>
                            <p class="mb-2">RASPI Password:   <span class="fw-semibold mx-2"><?php echo "*********";?></span></p>
                          </div>
                        </li>


                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-0">VNC Viewer Details:</h6>
                            </div>
                            <p class="mb-2">VNC Username: <span class="fw-semibold mx-2"><?php echo isset($vms_drive_data['vnc_name']) ? $vms_drive_data['vnc_name'] : ''; ?></span></p>
                            <p class="mb-2">VNC Password:<span class="fw-semibold mx-2"><?php echo isset($vms_drive_data['vnc_password']) ? $vms_drive_data['vnc_password'] : ''; ?></span></p>
                          </div>
                        </li>
                        <li class="timeline-end-indicator">
                          <i class="bx bx-check-circle"></i>
                        </li>
                      </ul>
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
</html>
