<!DOCTYPE html>

<html lang="en"
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

    <title>ADMIN-VMS </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/cosai.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    <!-- Form Validation -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />


    <!-- Helpers -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/helpers.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
    <?php include('admin_aside.php');?>
        <div class="layout-page">
        <?php include('admin_sidenav.php');?>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">VMS /</span> Users Lists</h4>
              <div class="card">
                <h5 class="card-header mb-2"> User List</h5>
                <div class="modal fade" id="addPermissionModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content p-3 p-md-5">
                      <button type="button"class="btn-close btn-pinned"data-bs-dismiss="modal"aria-label="Close"></button>
                      <div class="modal-body">
                        <div class="text-center mb-4">
                          <h3>Add New User</h3>
                        </div>
                        <form id="addPermissionForm" method="POST"  action="<?php echo base_url(); ?>admin/userlist" class="row" >
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
                          <div class="col-12 mb-3">
                            <label class="form-label" for="modalPermissionName">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus />
                            <span class="error"><?php echo form_error('username'); ?></span>
                          </div>
                          <div class="col-12 mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                            <span class="error"><?php echo form_error('email'); ?></span>
                          </div>


                          <div class="col-12 mb-2 form-password-toggle">
                          <label class="form-label" for="password">Password</label>
                          <div class="input-group input-group-merge">
                          <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                          <span class="input-group-text cursor-pointer" id="showCustomPasswordButton"><i class="bx bx-hide"></i></span>
                          </div>
                          <span class="error"><?php echo form_error('password'); ?></span>
                          </div>

                          <div class="col-12 mb-2 form-password-toggle">
                         <label class="form-label" for="confirm_password">Confirm Password</label>
                         <div class="input-group input-group-merge">
                         <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm_password" />
                         <span class="input-group-text cursor-pointer" id="showCustomPasswordButton2"><i class="bx bx-hide"></i></span>
                         </div>
                         <span class="error"><?php echo form_error('confirm_password'); ?></span>
                         </div>

                          <?php
                          $originalString = "COSAI_VMS_";
                          $randomNumber = rand(100, 999);
                          $finalString = $originalString . $randomNumber;
                          ?>
                          <div class="col-12 mb-2">
                            <label class="form-label" for="device_number">Device Id</label>
                            <input type="text" name="device_number" class="form-control" placeholder="Device Number" value="<?php echo $finalString;?>" />
                             <span class="error"><?php echo form_error('device_number'); ?></span>
                          </div>

                          <div class="col-12 text-center demo-vertical-spacing">
                            <input type="submit" class="btn btn-primary me-sm-3 me-1" name="signupSubmit" value="Register">
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Discard</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="card-datatable table-responsive pt-0">
                  <table class="dt-row-grouping table table-bordered" id='example'>
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <!-- <th>User Password</th> -->
                        <th>User Device Number</th>
                        <th> Device Status</th>
                        <th>User Profile</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                  </table>


              </div>
            </div>
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
<script src="<?php echo base_url(); ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="<?php echo base_url();?>assets/vendor/js/menu.js"></script>
<script src="<?php echo base_url();?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="<?php echo base_url();?>assets/js/modal-add-permission.js"></script>
<script>
const passwordInput = document.getElementById('password');
const showPasswordButton = document.getElementById('showCustomPasswordButton');

showPasswordButton.addEventListener('click', function () {
if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showPasswordButton.innerHTML = '<i class="bx bx-show"></i>';
} else {
    passwordInput.type = 'password';
    showPasswordButton.innerHTML = '<i class="bx bx-hide"></i>';
}
});

const confirmpasswordInput = document.getElementById('confirm_password');
const confirmshowPasswordButton = document.getElementById('showCustomPasswordButton2');

confirmshowPasswordButton.addEventListener('click', function () {
if (confirmpasswordInput.type === 'password') {
    confirmpasswordInput.type = 'text';
    confirmshowPasswordButton.innerHTML = '<i class="bx bx-show"></i>';
} else {
    confirmpasswordInput.type = 'password';
    confirmshowPasswordButton.innerHTML = '<i class="bx bx-hide"></i>';
}
});


setTimeout(function () {
   $('#success-alert').fadeOut('slow');
   $('#error-alert').fadeOut('slow');
}, 5000); // 5000 milliseconds = 5 seconds

$(function () {
var groupingTable = $('.dt-row-grouping'),
groupColumn = 1; // Replace with the actual index of the column you want to group by

if (groupingTable.length) {
  var dt_grouping = groupingTable.DataTable({
    ajax: {
      url: "<?php echo base_url('Admin/getalluserlist'); ?>",
      type: "POST"
    },
    columns: [
      {
        data: null,
        render: function (data, type, full, meta) {
          return meta.row + 1;
        }
      },
      { data: 'username' },
      { data: 'email' },
      // { data: 'password' },
      { data: 'device_number' },
      {
        data: 'kit_live_status',
        render: function (data, type, full, meta) {
           var statusInfo = {
             0: { title: 'Offline', class: 'bg-label-danger ' },
             1: { title: 'Online', class: 'bg-label-success' }
           };

           return (
             '<span class="badge rounded-pill ' +
             statusInfo[data].class +
             '">' +
             statusInfo[data].title +
             '</span>'
           );
         }
      },
      {
        data: 'profile',
        render: function (data, type, full, meta) {
          return '<img src="assets/img/upload_image/' + data + '" alt="Avatar" class="rounded-circle mx-auto d-block" style="height: 50px; width: 50px;">';
        }
      },
      {
        data: 'id',
        targets: -1,
        title: 'Actions',
        render: function (data, type, full, meta) {
          return (
            '<div class="d-flex align-items-center">' +
            '<div class="dropdown">' +
            '<a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>' +
            '<div class="dropdown-menu dropdown-menu-end">' +
            '<a class="dropdown-item" href="<?php echo base_url();?>admin/edituser?id=' + data + '"><i class="bx bx-edit-alt me-1"></i> Edit</a>' +
            '<a class="dropdown-item" href="<?php echo base_url();?>admin/deleteuser?id=' + data + '"><i class="bx bx-trash me-1"></i> Delete</a>' +
            '<a class="dropdown-item" href="<?php echo base_url();?>admin/userlogin?id=' + data + '" target="_blank"><i class="bx bx-log-in me-1"></i> Login</a>' +
            '</div>' +
            '</div>' +
            '</div>'
          );
        }
      }
    ],
    order: [[groupColumn, 'asc']],
    dom:
      '<"row mx-1"' +
      '<"col-sm-12 col-md-3" l>' +
      '<"col-sm-12 col-md-9"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"<"me-3"f>B>>' +
      '>t' +
      '<"row mx-2"' +
      '<"col-sm-12 col-md-6"i>' +
      '<"col-sm-12 col-md-6"p>' +
      '>',
    language: {
      sLengthMenu: '_MENU_',
      search: 'Search',
      searchPlaceholder: 'Search..'
    },
    // Buttons with Dropdown
    buttons: [
      {
        text: 'Add New User',
        className: 'add-new btn btn-primary mb-3 mb-md-0',
        attr: {
          'data-bs-toggle': 'modal',
          'data-bs-target': '#addPermissionModal'
        },
        init: function (api, node, config) {
          $(node).removeClass('btn-secondary');
        }
      }
    ]
  });

}
});
</script>

</html>
