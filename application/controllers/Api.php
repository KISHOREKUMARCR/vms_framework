<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('Admin_model');
            $this->load->model('User_model');
            $this->load->library('session');
            $this->load->helper("security");
            $this->load->helper('url');
        }
        public function postdata() {
                $json_data = file_get_contents('php://input');
                $data = json_decode($json_data, true);
                if ($data) {
                        $kit_id = $data['kit_id'];
                        $Realtimedata_Raspi = array(
                            'kit_id' => $data['kit_id'],
                            'hostname' => $data['System Info']['hostname'],
                            'modify_time' => $data['System Info']['modify_time'],
                            'server_address' => $data['System Info']['server_address'],
                            'server_port' => $data['System Info']['server_port'],
                            'cpu_usage_percentage' => $data['CPU']['Usage Percentage'],
                            'number_of_cores' => $data['CPU']['Number of Cores'],
                            'cpu_frequency' => $data['CPU']['CPU Frequency'],
                            'cpu_frequency_khz' => $data['CPU']['CPU Frequency_khz'],
                            'cpu_temperature' => $data['CPU']['CPU Temperature'],
                            'memory_usage_percentage' => $data['Memory']['Usage Percentage'],
                            'total_memory' => $data['Memory']['Total Memory'],
                            'free_memory' => $data['Memory']['Free Memory'],
                            'used_ram_memory' => $data['Memory']['Used Memory'],
                            'disk_usage_percentage' => $data['Disk']['Usage Percentage'],
                            'disk_space_used' => $data['Disk']['Disk Space Used'],
                            'available_disk_space' => $data['Disk']['Available Disk Space'],
                            'total_disk_space' => $data['Disk']['Total Disk Space'],
                            'kit_status' => $data['kit_status'],
                            'drive_total_space_gb' => $data['Drive_momory']['drive_total_space_gb'],
                            'drive_free_space_gb' => $data['Drive_momory']['drive_free_space_gb'],
                            'drive_used_space_gb' => $data['Drive_momory']['drive_used_space_gb'],
                            'drive_free_space_percentage' => $data['Drive_momory']['drive_free_space_percentage']
                        );

                        $Result_kitdata=$this->Admin_model->saveOrUpdateRealtimekitData($kit_id,$Realtimedata_Raspi);
                        if ($Result_kitdata){
                              echo json_encode(['Success' => 'Kit data is inserted']);
                              echo "Kit data is inserted";
                        }
                        else{
                              echo json_encode(['Success' => 'Kit data is Updated']);
                              echo "Kit data is Updated";
                        }
                }
          }


          public function getstream(){
            $json_data = file_get_contents('php://input');
            $data = json_decode($json_data, true);
            if ($data) {
              if (isset($data['kit_id'])) {
                  $kit_id = $data['kit_id'];
                  $live_status=$this->User_model->GetSwitchStatus($kit_id);
                  $data_live=$live_status['live_switch'];
                  $response = array(
                  'live_switch' =>  $data_live
                  );
                  header('Content-Type: application/json');
                  echo json_encode($response);
              }
              $Frame_status= $data['frame_status'];
              $UserKitId= $data['kit_id'];
              $SingleFrame_Kit= $data['image'];

              if (isset($SingleFrame_Kit)){
                $imageData = base64_decode($SingleFrame_Kit);
                $folderPath='Frames/'.$UserKitId.'/';
                if (!file_exists($folderPath)){
                  mkdir($folderPath,0777,true);
                }

                $originalString = "FRAMES_";
                $randomNumber = rand(1, 10);
                $finalString = $originalString . $randomNumber .'.jpeg';


                $imagePath = $folderPath . $finalString;
                file_put_contents($imagePath, $imageData);

              }
              if (isset($Frame_status)){
                 $switch_data=array('live_switch'=>$Frame_status);
                 $live_status=$this->User_model->UpdateSwitch($UserKitId, $switch_data);

              }
            }
          }


  }
?>
