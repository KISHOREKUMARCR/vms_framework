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
    <?php  include('main_aside.php');  ?>
        <div class="layout-page">
        <?php include('side_nav.php');?>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">KIT /</span> Report</h4>
              <div class="card">
                <h5 class="card-header mb-2">Cloud Video Records</h5>

                <div class="card">
                <div class="card-datatable table-responsive pt-0">

                    <table class="datatables-basic table table-bordered mb-2" id="example" class="display">
                    <thead>
                    <tr>

                    <th>SNO</th>
                    <th>File Name</th>
                    <th>Start Time</th>
                    <th>File Status</th>
                    <th>Video Preview</th>
                    <th>Share </th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php    $k = 0; foreach ($user_cloud_data as $user_cloud_data){ ?>
                      <tr>
                          <td><?php echo $user_cloud_data['id']; ?></td>
                          <td><?php echo $user_cloud_data['file_name']; ?></td>
                          <td><?php echo $user_cloud_data['start_time']; ?></td>
                          <td><span class="badge rounded-pill bg-label-success" >Completed</td>
                            <td>


                            <a href="#" data-toggle="modal" data-target="#videoModal<?php echo $k; ?>" class="btn btn-light">
                            <span><i class="fa fa-play-circle" style="font-size:20px;color:red"></i>  Watch</span>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="videoModal<?php echo $k; ?>" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">

                            <div class="modal-header">
                            <a href="#" class="app-brand-link">
                            <img src="http://localhost/vms/images/cosai.png" width="50" height="50">
                            <span class="app-brand-text demo menu-text fw-bold ms-2">COS AI</span>
                            <h5 class="modal-title text-center"  style="margin-left: 100px;font-size: x-large;font-style: italic;color: darkorange;" id="videoModalLabel"><?php echo $user_cloud_data['start_time']; ?></h5>
                            </a>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body" style="padding: 1;">


                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $user_cloud_data['file_url']; ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                            </div>
                            </div>

                            <td>
                            <a class="btn btn-primary" style="background-color: #dd4b39;"href="mailto:?subject=Check out this video&body=Here's the link to the video on Google Drive: <?php echo $user_cloud_data['file_url']; ?>" role="button">
                            <i class="fas fa-share"></i></a>  </td>
                      </tr>
                        <?php    $k = $k+1; } ?>
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
