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
    <?php  include('main_aside.php');  ?>
        <div class="layout-page">
        <?php include('side_nav.php');?>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Traffic Video /</span> Live View</h4>
              <div>
                <h3 >After clicking, wait for 2 seconds</h3>
                  <button id="myButton"  class="btn btn-primary  mb-4"  value="Capture">Click Me</button>
                  <?php  $user_deviceId=$user_data->device_number;
                     $image_path= base_url('Frames/' . $user_deviceId . '/frame1.jpeg');
                  ?>
                  <img src="<?php echo $image_path;?>" id="liveVideo" width="100%" height="650px" />
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
  $(document).ready(function () {
    $('#myButton').click(function () {

      var buttonValue = $(this).val();
      $.ajax({
        type: 'POST',
        url: 'User/capture_frame',
        data: { buttonValue: buttonValue },
        success: function (response) {
          console.log(response);
          setTimeout(function () {
            location.reload();
          }, 3000);

        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    });
  });
</script>


</html>
