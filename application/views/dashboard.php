<?php
$client_name=$users_data["username"];
$client_email=$users_data["email"];
$client_device_number=$users_data["device_number"];
$client_phone=$users_data["phone"];
$client_address=$users_data["address"];
$client_state=$users_data["state"];
$client_zipcode=$users_data["zipcode"];
$client_country=$users_data["country"];
$client_profile=$users_data["profile"];
$hostname = $users_raspidata["hostname"];
$serverAddress = $users_raspidata["server_address"];
$serverPort = $users_raspidata["server_port"];
$cpuUsagePercentage = $users_raspidata["cpu_usage_percentage"];
$numberOfCores = $users_raspidata["number_of_cores"];
$cpuFrequency = $users_raspidata["cpu_frequency"];
$cpuFrequency_khz = $users_raspidata["cpu_frequency_khz"];
$cpuTemperature = $users_raspidata["cpu_temperature"];
$memoryUsagePercentage = $users_raspidata["memory_usage_percentage"];
$totalMemory = $users_raspidata["total_memory"];
$freeMemory = $users_raspidata["free_memory"];
$used_ram_memory = $users_raspidata["used_ram_memory"];
$update_time = $users_raspidata["modify_time"];
$diskUsagePercentage = $users_raspidata["disk_usage_percentage"];
$diskSpaceUsed = $users_raspidata["disk_space_used"];
$availableDiskSpace = $users_raspidata["available_disk_space"];
$totalDiskSpace = $users_raspidata["total_disk_space"];
$kit_status = $users_raspidata["kit_status"];
$total_memory_gb = $users_raspidata["total_memory_gb"];
$free_memory_gb = $users_raspidata["free_memory_gb"];
$drive_total_space_gb = $users_raspidata["drive_total_space_gb"];
$drive_free_space_gb = $users_raspidata["drive_free_space_gb"];
$drive_used_space_gb = $users_raspidata["drive_used_space_gb"];
$drive_free_space_percentage = $users_raspidata["drive_free_space_percentage"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<title>VMS</title>
<meta name="description" content="" />
<meta http-equiv="refresh" content="60">
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
<style>
.rounded-button-01 {
width: 160px;
height: 50px;
border-radius: 5px;
margin-top:-45px;
float:inline-end;
}
  </style>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <?php include('main_aside.php');?>

        <div class="layout-page">

          <?php include('side_nav.php');?>

          <div class="content-wrapper">

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">KIT /</span>Dashboard</h4>

              <div class="row gy-4">

              <div class="col-md-6 col-lg-6 mb-4 mb-md-0">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Device Status</h5>
                    </div>
                    <div class="card-body">


  <?php
date_default_timezone_set('Asia/Kolkata');
$lastModificationTimestamp = strtotime($update_time);
$currentTimestamp = time();
$timeDifference = $currentTimestamp - $lastModificationTimestamp;
$powerOffThreshold = 1 * 60;

if ($timeDifference >= $powerOffThreshold) {
$kit_live_status=0;//power is off
echo '<button type="button" class="  rounded-button-01 mb-0 btn btn-danger"><span style="font-size: 20px;">POWER OFF</span></button>';
} else {
$kit_live_status=1; //poweris on
echo '<button type="button" class="  rounded-button-01 mb-0 btn btn-success"><span style="font-size: 23px;">ACTIVE</span></button>';
}
?>



                      <ul class="p-0 m-5">
                      <li class="mb-3 d-flex justify-content-between">
                      <div class="d-flex align-items-center lh-1 me-3">
                      <span class="badge badge-dot bg-success me-2"></span> Username
                      </div>
                      <div class="d-flex gap-3">

                      <span class="fw-semibold"><?php echo $client_name;?></span>
                      </div>
                      </li>

                      <li class="mb-3 d-flex justify-content-between">
                      <div class="d-flex align-items-center lh-1 me-3">
                      <span class="badge badge-dot bg-danger me-2"></span> Update Time
                      </div>
                      <div class="d-flex gap-3">

                      <span class="fw-semibold"><?php echo $update_time;?></span>
                      </div>
                      </li>



                      <li class="mb-3 d-flex justify-content-between">
                      <div class="d-flex align-items-center lh-1 me-3">
                      <span class="badge badge-dot bg-info me-2"></span> Device Id
                      </div>
                      <div class="d-flex gap-3">

                      <span class="fw-semibold"><?php echo $client_device_number;?></span>
                      </div>
                      </li>






                      <li class="mb-3 d-flex justify-content-between">
                      <div class="d-flex align-items-center lh-1 me-3">
                      <span class="badge badge-dot bg-danger me-2"></span> Internal IP
                      </div>
                      <div class="d-flex gap-3">

                      <span class="fw-semibold"><?php echo $serverAddress;?></span>
                      </div>
                      </li>
                      <li class="mb-3 d-flex justify-content-between">
                      <div class="d-flex align-items-center lh-1 me-3">
                      <span class="badge badge-dot bg-info me-2"></span> Port
                      </div>
                      <div class="d-flex gap-3">

                      <span class="fw-semibold"><?php echo $serverPort;?></span>
                      </div>
                      </li>



                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Finance Summary -->

                <!-- Activity Timeline -->
                <div class="col-md-6 col-lg-6 mb-0">
                  <div class="card">
                    <div class="card-body">
                    <div class="card-title mb-0">
                          <h5 class="m-0 me-2">Temperature</h5>
                          </div>
                          <div class="dropdown mb-4">
                          </div>
                          <div id="growthRadialChart" class="text-center"></div>
                          <input type="hidden" id="cpuTemperature" value="<?php echo $cpuTemperature; ?>">
                          <?php $formattedCpuTemperature = number_format($cpuTemperature, 2); ?>
                          <h6 class="mb-0 mt-5 text-center"><?php echo $formattedCpuTemperature;?>  ℃ Temperature</h6>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                      <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Disk Memory</h5>

                        </div>
                        <div class="card-body">
                          <div id="diskMemoryChart">
                          Total Disk Memory: <span id="totalDiskSpace"></span>

                          </div>
                          <span>  </span>
                        </div>
                      </div>
                    </div>


                <div class="col-md-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-0">Cloud Memory</h5>

                    </div>
                    <div class="card-body">
                      <div id="driveMemoryChart">
                      Alloted Memory: <span id="totalDriveSpace"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Radar Chart -->

                <!-- Donut Chart -->

                <!-- /Donut Chart -->

              </div>
            </div>
            <!-- / Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                  <div class="row">
                  <!-- Website Analytics-->
                    <div class="col-lg-6 col-md-12 mb-4">
                      <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                          <h5 class="card-title mb-0">CPU Frequency Analytics</h5>
                        </div>
                        <div class="card-body pb-2">
                          <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                            <div class="user-analytics text-center me-2">
                              <i class="bx bx-trending-up me-1"></i>
                              <span>CPU (%) </span>
                              <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="success" data-series="<?php echo $cpuUsagePercentage; ?>"></div>
                                <h3 class="mb-0"><?php echo $cpuUsagePercentage; ?></h3>
                              </div>
                            </div>
                            <!-- Sessions Analytics -->
                            <div class="sessions-analytics text-center me-2">
                              <i class="bx bx-pie-chart-alt me-1"></i>
                              <span>No of Cores</span>
                              <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="warning" data-series=" <?php echo $numberOfCores; ?>"></div>
                                <h3 class="mb-0"> <?php echo $numberOfCores; ?></h3>
                              </div>
                            </div>
                          </div>
                        <canvas id="cpuChart" width="400" height="190"></canvas>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Local Memory</h5>

                    </div>
                    <div class="card-body">
                      <div id="donutChart">
                      Total Local Space: <span id="totalRamSpace"><?php echo   number_format($totalMemory, 2, '.', '');?> GB</span>

                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>
            <!-- Footer -->

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
    <!-- / Layout wrapper -->

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

    <script src="<?php echo base_url();?>assets/js/dashboards-analytics.js"></script>


   <script>
    const donutChartEl = document.querySelector('#donutChart');

    // const freeMemory = "<?php echo $freeMemory; ?>";
    // const used_ram_memory = "<?php echo $used_ram_memory; ?>";
    // const totalramMemory = "<?php echo $totalMemory; ?>";



    const freeMemoryGB = <?php echo $freeMemory; ?>;
    const usedRamMemoryGB = <?php echo $used_ram_memory; ?>;
    const totalRamMemoryGB = <?php echo $totalMemory; ?>;

    const freeRamMemoryMB = freeMemoryGB * 1024;
    const usedRamMemoryMB = usedRamMemoryGB * 1024;
    const totalRamMemoryMB = totalRamMemoryGB * 1024;

    console.log(`Free Memory: ${freeRamMemoryMB} MB`);
    console.log(`Used RAM Memory: ${usedRamMemoryMB} MB`);
    console.log(`Total RAM Memory: ${totalRamMemoryMB} MB`);



    const memDonutChartConfig = {
        chart: {
            height: 390,
            fontFamily: 'IBM Plex Sans',
            type: 'donut'
        },
        labels: ['Used', 'Free'],
        series: [usedRamMemoryMB, freeRamMemoryMB],
        colors: [
            '#FF6384', // Color for Used
            '#36A2EB', // Color for Free
        ],
        dataLabels: {
            enabled: true,
            formatter: function (val) {
              return Number((val).toFixed(1)) + '%';
            }
        },
        legend: {
            show: true,
            position: 'bottom'
        },
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        name: {
                            fontSize: '2rem',
                            color: '#333'
                        },
                        value: {
                            fontSize: '1.2rem',
                            color: '#333',
                            fontFamily: 'IBM Plex Sans',
                            formatter: function (val) {
                            return (val / 1024).toFixed(2) + ' GB'; // Display values in GB on hover
                            }
                        },
                        total: {
                            show: true,
                            fontSize: '1.5rem',
                            color: '#333',
                            label: 'RAM',
                            formatter: function (w) {
                            return (
                                ((usedRamMemoryMB / totalRamMemoryMB) * 100).toFixed(2) + '%'
                            );
                        }
                        }
                    }
                }
            }
        }
    };

    if (donutChartEl) {
        const memDonutChart = new ApexCharts(donutChartEl, memDonutChartConfig);
        memDonutChart.render();
    }
</script>


   <script>

const driveTotalSpaceGB = <?php echo $drive_total_space_gb; ?>;
const driveFreeSpaceGB = <?php echo $drive_free_space_gb; ?>;
const driveUsedSpaceGB = <?php echo $drive_used_space_gb; ?>;
const driveFreeSpacePercentage = <?php echo $drive_free_space_percentage; ?>;

const totalDriveSpaceEl = document.querySelector('#totalDriveSpace');
const driveTotalSpaceGB1 = <?php echo $drive_total_space_gb; ?>;

// Set the text content of the span element
totalDriveSpaceEl.textContent = driveTotalSpaceGB1 + ' GB';


const driveMemoryChartEl  = document.querySelector('#driveMemoryChart');
const driveDonutChartConfig   = {
    chart: {
        height: 390,
        fontFamily: 'IBM Plex Sans',
        type: 'donut'
    },
    labels: ['Used', 'Free'],
    series: [driveUsedSpaceGB, driveFreeSpaceGB],
    colors: [
        '#FF6384', // Color for Used
        '#36A2EB'  // Color for Free
    ],
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return Number((val).toFixed(1)) + '%';
        }
    },
    legend: {
        show: true,
        position: 'bottom'
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    name: {
                        fontSize: '2rem',
                        color: '#333'
                    },
                    value: {
                        fontSize: '1.2rem',
                        color: '#333',
                        fontFamily: 'IBM Plex Sans',
                        formatter: function (val) {
                            return val + ' GB Used';
                        }
                    },
                    total: {
                        show: true,
                        fontSize: '1.5rem',
                        color: '#333',
                        label: 'Cloud Space',
                        formatter: function () {
                            return driveUsedSpaceGB + 'GB Used';
                        }
                    }
                }
            }
        }
    }
};

if (driveMemoryChartEl) {
    const driveDonutChart = new ApexCharts(driveMemoryChartEl, driveDonutChartConfig);
    driveDonutChart.render();
}
    </script>




    <script>
    // Extracted CPU data (Replace these with your actual PHP variables)
    var cpuUsagePercentage = <?php echo $cpuUsagePercentage; ?>;
    var numberOfCores = <?php echo $numberOfCores; ?>;
    var cpuFrequency = <?php echo $cpuFrequency; ?>;
    var cpuTemperature = <?php echo $cpuTemperature; ?>;

    // Create a bar chart
    var ctx = document.getElementById('cpuChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ['CPU Frequency'],
        datasets: [{
        label: 'CPU Data',
        data: [cpuFrequency], // Include only the CPU Frequency data
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
        }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


<script>
const totalDiskSpaceGB = <?php echo $totalDiskSpace; ?>;
const diskSpaceUsedGB = <?php echo $diskSpaceUsed; ?>;
const availableDiskSpaceGB = <?php echo $availableDiskSpace; ?>;
const diskUsagePercentage = <?php echo $diskUsagePercentage; ?>;

const totalDiskSpaceEl = document.querySelector('#totalDiskSpace');
const totalDiskSpaceGB1 = <?php echo $totalDiskSpace; ?>;

// Set the text content of the span element
totalDiskSpaceEl.textContent = totalDiskSpaceGB1 + ' GB';

const diskMemoryChartEl = document.querySelector('#diskMemoryChart');


const diskDonutChartConfig = {
    chart: {
        height: 390,
        fontFamily: 'IBM Plex Sans',
        type: 'donut'
    },
    labels: ['Used', 'Free'],
    series: [diskSpaceUsedGB, availableDiskSpaceGB],
    colors: [
        '#FF6384', // Color for Used
        '#36A2EB'  // Color for Available
    ],
    dataLabels: {
        enabled: true,
        formatter: function (val) {
            return Number((val).toFixed(1)) + '%';
        }
    },
    legend: {
        show: true,
        position: 'bottom'
    },
    plotOptions: {
        pie: {
            donut: {
                labels: {
                    show: true,
                    name: {
                        fontSize: '2rem',
                        color: '#333'
                    },
                    value: {
                        fontSize: '1.2rem',
                        color: '#333',
                        fontFamily: 'IBM Plex Sans',
                        formatter: function (val) {
                            return val + 'GB ';
                        }
                    },
                    total: {
                        show: true,
                        fontSize: '1.5rem',
                        color: '#333',
                        label: 'Disk Space',
                        formatter: function () {
                            return diskSpaceUsedGB + 'GB Used';
                        }
                    }
                }
            }
        }
    }
};

if (diskMemoryChartEl) {
    const diskDonutChart = new ApexCharts(diskMemoryChartEl, diskDonutChartConfig);
    diskDonutChart.render();
}

const toggle = document.querySelector('#toggle');

const updateBackground = (event) => {
document.body.classList.toggle('on');
}

toggle.addEventListener("click", () => document.body.classList.toggle('on') , false);



</script>

  </body>
</html>
