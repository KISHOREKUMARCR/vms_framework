<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->library('session');
        }


        public function index(){
            $user_data = $this->session->userdata('user_data');
            $client_id = $user_data->device_number;

            header('Content-Type: application/json');
            $jsonFile1 = 'raspi_live_datas.json';
            $data1 = file_get_contents($jsonFile1);
            $requestBody = json_decode($data1, true);
            echo json_encode($requestBody, JSON_PRETTY_PRINT);
            echo "______________________________________________________________";

            if ($requestBody === null) {
                http_response_code(400);
                echo json_encode(['error' => 'Invalid JSON data']);
            }
            else
            {
                        $kit_id = $requestBody['kit_id'];
                        date_default_timezone_set('Asia/Kolkata');
                        $Realtimedata_Raspi = array(
                              'kit_id'=>  $requestBody['kit_id'],
                              'modify_time' =>  date('Y-m-d H:i:s'),
                              'hostname' => $requestBody['System Info']['hostname'],
                              'server_address' => $requestBody['System Info']['server_address'],
                              'server_port' => $requestBody['System Info']['server_port'],
                              'cpu_usage_percentage' => $requestBody['CPU']['Usage Percentage'],
                              'number_of_cores' => $requestBody['CPU']['Number of Cores'],
                              'cpu_frequency' => $requestBody['CPU']['CPU Frequency'],
                              'cpu_frequency_khz' => $requestBody['CPU']['CPU Frequency_khz'],
                              'cpu_temperature' => $requestBody['CPU']['CPU Temperature'],
                              'memory_usage_percentage' => $requestBody['Memory']['Usage Percentage'],
                              'total_memory' => $requestBody['Memory']['Total Memory'],
                              'free_memory' => $requestBody['Memory']['Free Memory'],
                              'used_ram_memory' => $requestBody['Memory']['Used Memory'],
                              'disk_usage_percentage' => $requestBody['Disk']['Usage Percentage'],
                              'disk_space_used' => $requestBody['Disk']['Disk Space Used'],
                              'available_disk_space' => $requestBody['Disk']['Available Disk Space'],
                              'total_disk_space' => $requestBody['Disk']['Total Disk Space'],                              
                              'kit_status' => $requestBody['kit_status'],
                              'total_memory_gb' => $requestBody['Drive_momory']['drive_total_space_gb'],
                              'free_memory_gb' => $requestBody['Drive_momory']['drive_free_space_gb'],
                              'drive_total_space_gb' => $requestBody['Drive_momory']['drive_total_space_gb'],
                              'drive_free_space_gb' => $requestBody['Drive_momory']['drive_free_space_gb'],
                              'drive_used_space_gb' => $requestBody['Drive_momory']['drive_used_space_gb'],
                              'drive_free_space_percentage' => $requestBody['Drive_momory']['drive_free_space_percentage']
                          );

                        $Result_kitdata=$this->Admin_model->saveOrUpdateRealtimekitData($kit_id,$Realtimedata_Raspi);
                        if ($Result_kitdata){
                              echo json_encode(['Success' => 'Kit data is inserted']);
                        }
                        else{
                          echo json_encode(['Success' => 'Kit data is Updated']);
                        }

            }

        }
        public function postdata() {
              $requestBody = json_decode(file_get_contents('php://input'), true);
              $infoDataJson = json_encode($requestBody, JSON_PRETTY_PRINT);
              header('Content-Type: application/json');
              $jsonFile1 = 'raspi_live_datas.json';
              file_put_contents($jsonFile1, $infoDataJson);
              echo json_encode(['Success' => 'Kit data is Updated']);
        }

        public function get_stream(){
              $requestBody = json_decode(file_get_contents('php://input'), true);
              $infoDataJson = json_encode($requestBody, JSON_PRETTY_PRINT);
              header('Content-Type: application/json');
              $jsonFile1 = 'raspi_live_stream.json';
              file_put_contents($jsonFile1, $infoDataJson);
              echo json_encode(['Success' => 'stream']);
        }
        public function get_streaming_img(){
              $user_data = $this->session->userdata('user_data');
              $client_id = $user_data->device_number;

              header('Content-Type: application/json');
              $jsonFile1 = 'raspi_live_stream.json';
              $data1 = file_get_contents($jsonFile1);
              $data = json_decode($data1, true);
              echo json_encode($data, JSON_PRETTY_PRINT);
              echo "______________________________________________________________";

              if ($requestBody === null) {
                  http_response_code(400);
                  echo json_encode(['error' => 'Invalid JSON data']);
              }
              else
              {
                        echo "data";
              }
        }
  }
?>
