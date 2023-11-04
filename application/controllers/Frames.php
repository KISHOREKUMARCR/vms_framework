<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frames extends CI_Controller{
  function __construct() {
      parent::__construct();
      $this->load->model('User_model');
      $this->load->library('session');
  }
  public function index(){
      $user_data = $this->session->userdata('user_data');
      $client_id = $user_data->device_number;
      header('Content-Type: application/json');
      $jsonFile2='raspi_live_stream.json';
      $data2=file_get_contents($jsonFile2);
      $requestBody=json_decode($data2,true);
      if ($requestBody === null){
          http_response_code(400);
          echo json_encode(['error'=>'Invalid JSON Data']);
      }
      else{
          $Frame_status= $requestBody['frame_status'];
          $UserKitId= $requestBody['kit_id'];
          $SingleFrame_Kit= $requestBody['image'];
          if (isset($SingleFrame_Kit)){
            $imageData = base64_decode($SingleFrame_Kit);
            $folderPath=APPPATH .'Frames/'.$UserKitId.'/';
            if (!file_exists($folderPath)){
              mkdir($folderPath,0777,true);
            }
            $imagePath = $folderPath . 'frame1.jpeg';
            file_put_contents($imagePath, $imageData);
            echo "Frames is Updated";
          }
          if (isset($Frame_status)){
             $switch_data=array('live_switch'=>$Frame_status);
             $live_status=$this->User_model->UpdateSwitch($UserKitId, $switch_data);
             echo "Switch Status is Updated";
          }
      }
  }

  // get the Raspi Frame
  public function get_stream(){
        $user_data = $this->session->userdata('user_data');
        $user_kitid=$user_data->device_number;
        $requestBody = json_decode(file_get_contents('php://input'), true);
        $infoDataJson = json_encode($requestBody, JSON_PRETTY_PRINT);
        header('Content-Type: application/json');
        $jsonFile1 = 'raspi_live_stream.json';
        file_put_contents($jsonFile1, $infoDataJson);
        $live_status=$this->User_model->GetSwitchStatus($user_kitid);
        echo json_encode(['live_switch' => 'Capture']);
  }


}
?>
