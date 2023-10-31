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
    <?php  include('main_aside.php');  ?>
        <div class="layout-page">
        <?php include('side_nav.php');?>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Account /</span> Edit Profile</h4>
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
                    <form id="formAccountSettings" method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">




                    <?php
                    if (isset($_SESSION['update_status'])) { ?>
                    <div class="alert alert-success">
                    <?php echo $_SESSION['update_status']; ?>
                    </div>
                    <?php
                    unset($_SESSION['update_status']); // Clear the session variable
                    } ?>

                      <div class="d-flex align-items-start align-items-sm-center gap-4">

                        <img
                          src=" <?php echo base_url();?>assets/img/1.png"
                    
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar" />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              name="upload_img"
                               />
                          </label>
                          <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

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
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="username"
                              value="<?php echo $client_name;?>"
                              autofocus />
                          </div>


                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Device Id</label>
                            <input class="form-control" type="text" name="deviceid" id="lastName" value="<?php
                                if ($client_device_number){

                                  echo $client_device_number;
                                }else{
                                  echo"";
                                }
                                ?>" />
                          </div>



                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value=" <?php
                                if ($client_email){
                                  echo $client_email;
                                }else{
                                  echo"";
                                }
                                ?>"
                              placeholder="demo@example.com" />
                          </div>



                          <div class="col-xl-6 col-md-6 col-sm-12 mb-4">
                          <label class="form-label" for="phone-number-mask">Phone Number</label>
                          <div class="input-group">
                          <span class="input-group-text">IND (+91)</span>
                          <input
                          type="text"
                          id="phoneNumber"
                          name="phoneNumber1"
                          class="form-control phone-number-mask"
                          value="<?php if ($client_phone){echo $client_phone; }else{echo""; }?>"
                          placeholder="" required/>
                          </div>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"  value="<?php
                                if ($client_address){
                                  echo $client_address;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="Address" required/>
                          </div>



                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input class="form-control" type="text" id="state" name="state"  value="<?php
                                if ($client_state){
                                  echo $client_state;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="state" required/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="231465"
                              value="<?php
                                if ($client_zipcode){
                                  echo $client_zipcode;
                                }else{
                                  echo"";
                                }
                                ?>"
                              required
                              maxlength="6" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" class="select2 form-select" name="country" >

                              <option value="India" selected>India</option>

                            </select>
                          </div>


                          <h5 class="mb-3 font-weight-bold">Cloud Details</h5>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label"> Cloud Email Address:</label>
                            <input type="text" class="form-control" id="google_drive_email" name="google_drive_email"  value="<?php
                                if ($google_drive_email){
                                  echo $google_drive_email;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="CLOUD EMAIL" required/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Cloud Email Password</label>
                            <input type="text" class="form-control" id="google_drive_pass" name="google_drive_pass"  value="<?php
                                if ($google_drive_pass){
                                  echo $google_drive_pass;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="CLOUD PASSWORD" required/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Cloud Secret Key </label>
                            <input type="text" class="form-control" id="google_drive_secretkey" name="google_drive_secretkey"  value="<?php
                                if ($google_drive_secretkey){
                                  echo $google_drive_secretkey;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="CLOUD SECRET KEY" required/>
                          </div>

                          <h5 class="mb-3 font-weight-bold">KIT   Detail's</h5>


                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">KIT   SSID:</label>
                            <input type="text" class="form-control" id="raspi_ssid" name="raspi_ssid"  value="<?php
                                if ($raspi_ssid){
                                  echo $raspi_ssid;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="KIT SSID" required/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">KIT   Password</label>
                            <input type="text" class="form-control" id="raspi_pass" name="raspi_pass"  value="<?php
                                if ($raspi_pass){
                                  echo $raspi_pass;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="KIT PASSWORD" required/>
                          </div>


                          <h5 class="mb-3 font-weight-bold">VNC Viewer Detail's</h5>


                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">VNC Viewer Username:</label>
                            <input type="text" class="form-control" id="vnc_username" name="vnc_username"  value="<?php
                                if ($vnc_username){
                                  echo $vnc_username;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="vnc_username" required/>
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label"> VNC Viewer Password:</label>
                            <input type="text" class="form-control" id="vnc_pass " name="vnc_pass"  value="<?php
                                if ($vnc_pass){
                                  echo $vnc_pass;
                                }else{
                                  echo"";
                                }
                                ?>" placeholder="vnc_pass" required/>
                          </div>







                        </div>

                        <div class="mt-2">

                          <input type="submit" class="btn btn-primary me-2">
                          <button type="reset" class="btn btn-label-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
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
    <script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
    <!-- <script src="<?php echo base_url();?>assets/vendor/js/template-customizer.js"></script>
    <script src="<?php echo base_url();?>assets/js/config.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script> -->
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
    
    <script src="<?php echo base_url();?>assets/js/pages-auth.js"></script>
</html>