<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?php echo base_url(); ?>assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>VMS</title>

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
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php  include('main_aside.php');  ?>
        <div class="layout-page">
          <?php include('side_nav.php');?>
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">KIT /</span> Report</h4>
              <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="modal-body">
                              <iframe id="iframeContent" width="100%" height="500" src="" allowfullscreen></iframe>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Row grouping -->
              <div class="card">
                <h5 class="card-header">Video Reports</h5>
                <div class="card-datatable table-responsive">
                  <table class="dt-row-grouping table table-bordered" id='example'>
                    <thead>
                      <tr>
                        <th>S No</th>
                        <th>file_name</th>
                        <th>start_time</th>
                        <th>File Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!--/ Row grouping -->

            </div>

          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo base_url(); ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/libs/hammer/hammer.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/libs/i18n/i18n.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo base_url(); ?>assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <!-- Flat Picker -->
    <script src="<?php echo base_url(); ?>assets/vendor/libs/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Form Validation -->
    <script src="<?php echo base_url(); ?>assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/modal-edit-permission.js"></script>
    <!-- Page JS -->
    <script>
        $(document).ready(function() {
            var dataTable = $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?php echo base_url('User/getJsonData'); ?>",
                    "type": "POST"
                },
                "columns": [
                    {
                        data: null,
                        render: function(data, type, full, meta) {
                            return meta.row + 1;
                        }
                    },
                    { data: 'file_name' },
                    { data: 'start_time' },
                    {
                        targets: -2,
                        render: function (data, type, full, meta) {
                            var $status_number =1;
                            var $status = {
                              1: { title: 'Completed', class: ' bg-label-success' }
                            };
                            return (
                              '<span class="badge rounded-pill ' +
                              $status[$status_number].class +
                              '">' +
                              $status[$status_number].title +
                              '</span>'
                            );
                        }
                    },
                    {
                        targets: -1,
                        data: 'file_url',
                        title: 'Actions',
                        searchable: false,
                        orderable: false,
                        render: function (data, type, full, meta) {
                          return (
                              '<div class="d-flex align-items-center">' +
                              '<a href="mailto:?subject=Check out this video&body=Here\'s the link to the video on Google Drive: ' + data + '"  role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Mail"><i class="bx bx-send mx-1"></i></a>' +
                              '<a href="javascript:;" class="text-body open-modal" data-bs-toggle="tooltip" data-bs-placement="top" data-modal-src="' + data + '" title="Preview Invoice"><i class="bx bx-show mx-1"></i></a>' +
                              '</div>'
                          );
                        }

                    }
                ]
            });
            $('#example').on('click', '.open-modal', function() {
            var fileUrl = $(this).data('modal-src');
            $('#iframeContent').attr('src', fileUrl);
            $('#editPermissionModal').modal('show');
            });
        });
    </script>
  </body>
</html>
