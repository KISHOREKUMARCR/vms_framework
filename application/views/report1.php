<!DOCTYPE html>
<html>
<head>
    <!-- Include necessary CSS and JavaScript libraries -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
</head>
<body>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Serial Number</th> <!-- Add this new th -->
                <th>file_name</th>
                <th>start_time</th>
                <th>Video Preview</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

    <!-- Modal for displaying the iframe content -->
    <div class="modal fade" id="editPermissionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <iframe id="iframeContent" width="100%" height="500" src=""></iframe>
                </div>
            </div>
        </div>
    </div>

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
                            return meta.row + 1; // Serial number starts from 1
                        }
                    },
                    { data: 'file_name' },
                    { data: 'start_time' },
                    {
                        data: 'file_url',
                        render: function(data, type, full, meta) {
                            return '<button class="btn btn-sm btn-icon me-2 watch-button" data-file-url="' + data + '">Watch</button>';
                        }
                    },
                    {
                        targets: -1,
                        title: 'Actions',
                        searchable: false,
                        orderable: false,
                        render: function (data, type, full, meta) {
                            return (
                                '<div class="d-flex align-items-center">' +
                                '<a href="javascript:;" data-bs-toggle="tooltip" class="text-body open-modal" data-bs-placement="top" data-modal-src="' + data + '" title="Send Mail"><i class="bx bx-send mx-1"></i></a>' +
                                '<a href="javascript:;" class="text-body open-modal" data-bs-toggle="tooltip" data-bs-placement="top" data-modal-src="' + data + '" title="Preview Invoice"><i class="bx bx-show mx-1"></i></a>' +
                                '</div>'
                            );
                        }

                    }
                ]
            });

            // Handle button click to open the modal
            $('#example').on('click', '.watch-button ', function() {
                var fileUrl = $(this).data('file-url');
                $('#iframeContent').attr('src', fileUrl);
                $('#editPermissionModal').modal('show');
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
