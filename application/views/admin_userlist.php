<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>VMS-ADMIN</title>
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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href=" https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">VMS /</span> User Lists</h4>
              <div class="card">
                <h5 class="card-header mb-2"> UserList</h5>

                <div class="card">
                <div class="card-datatable table-responsive pt-0">
                 
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Password</th>
                          <th>User Device Number</th>
                          <th>User Profile</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      <?php foreach ($users as $user){ ?>
                        <tr>
                          <td><strong><?php echo $user['username']; ?></strong></td>
                          <td><?php echo $user['email']; ?></td>
                          <td><?php echo $user['password']; ?></td>
                          <td><?php echo $user['device_number']; ?></td>
                          <td>
                            <ul class="list-unstyled users-list m-3 avatar-group d-flex align-items-center">
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="<?php echo $user['username']; ?>">
                                <img src=" <?php echo base_url();?>assets/img/upload_image/<?php echo $user['profile']; ?>" alt="Avatar" class="rounded-circle" />
                              </li>
                            </ul>
                          </td>

                          <td>
                            <div class="dropdown">
                              <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url();?>admin/edituser?id=<?php echo $user['id']; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="<?php echo base_url();?>admin/edituser?id=<?php echo $user['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>

                </div>
              </div>

              </div>
            </div>
        </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
</div>
</body>
    <script src="<?php echo base_url();?>assets/vendor/js/helpers.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/js/template-customizer.js"></script>
    <script src="<?php echo base_url();?>assets/js/config.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/hammer/hammer.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/js/menu.js"></script>

    <script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/pages-auth.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/moment/moment.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="<?php echo base_url();?>assets/js/tables-datatables-basic.js"></script>
    <script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src=" https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function() {
    var printCounter = 0;


    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'pdf',
                messageBottom: null
            },
            {
                extend: 'print',
                messageTop: function () {
                    printCounter++;

                    if ( printCounter === 1 ) {
                        return 'This is the first time you have printed this document.';
                    }
                    else {
                        return 'You have printed this document '+printCounter+' times';
                    }
                },
                messageBottom: null
            }
        ]
    } );
} );
</script>
</html>


