<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }


    public function index(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin_login');
        }
        else
        {
            $login_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $result = $this->Admin_model->check_login($login_data);
            if ($result['status'] === TRUE)
            {
                $user_data = $result['data'];
                $this->session->set_userdata('user_data', $user_data);
                redirect('admin_userlist');
            }
            else{
                $this->session->set_flashdata('login_error', 'Invalid email or password.');
                $this->load->view('admin_login');
            }
        }
    }
    public function getalluserlist(){
        $json_file_path = 'JsonData/alluserlist.json';
        if (file_exists($json_file_path))
        {
              $json_data=file_get_contents($json_file_path);
              $data = json_decode($json_data, true);
              $draw = $this->input->post('draw');
              $start = $this->input->post('start');
              $length = $this->input->post('length');
              $filteredData = array_slice($data['data'], $start, $length);
              $response = array(
              'draw' => $draw,
              'recordsTotal' => count($data['data']),
              'recordsFiltered' => count($data['data']),
              'data' => $filteredData,
              );
              $this->output
              ->set_content_type('application/json')
              ->set_output(json_encode($response));
        } else {
              $this->output->set_status_header(404);
              echo 'JSON file not found.';
        }
    }


    public function userlist(){
        $data = $this->Admin_model->get_user_details();
        $json_alldata = array('data' => array());

        foreach ($data as $value) {
            $iterate_deviceid = $value['device_number'];
            $iterate_datatime = $this->User_model->getRaspiData($iterate_deviceid);
            $iterate_modifytime = $iterate_datatime['modify_time'];

            date_default_timezone_set('Asia/Kolkata');

            $lastModificationTimestamp = strtotime($iterate_modifytime);
            $currentTimestamp = time();
            $timeDifference = $currentTimestamp - $lastModificationTimestamp;
            $powerOffThreshold = 1 * 60;

            if ($timeDifference >= $powerOffThreshold) {
                $kit_live_status = 0;
            } else {
                $kit_live_status = 1;
            }
            $value['kit_live_status'] = $kit_live_status;
            $json_alldata['data'][] = $value;
        }

        $json_data = json_encode($json_alldata,JSON_PRETTY_PRINT);
        $folderPath='JsonData/';
        if (!file_exists($folderPath)){
        mkdir($folderPath,0777,true);
        }
        $dataPath = $folderPath . 'alluserlist.json';
        file_put_contents($dataPath, $json_data);

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('device_number', 'Device Number', 'trim|required');

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          if ($this->form_validation->run() == true)
           {
             $this->add_users();
           }
        }
        $this->load->view('admin_userlist',$data);

    }
    public function add_users(){

        $email = $this->input->post('email');
        $email_exists = $this->User_model->checkEmailExists($email);
        if($email_exists){
          $this->session->set_flashdata('error', "Email already exists. Please choose another email.");
          redirect('admin_userlist');
          return;
        }
        $userData = array(
              'username' => strip_tags($this->input->post('username')),
              'email' => strip_tags($this->input->post('email')),
              'password' => strip_tags($this->input->post('password')),
              'device_number' => strip_tags($this->input->post('device_number')),
              );
          $insert_data_response = $this->User_model->insertUsers($userData);
          if ($insert_data_response) {
            $this->session->set_flashdata('success', "Saved Successfully!");
            redirect('admin_userlist');
          } else {
              $this->session->set_flashdata('error', "Registration failed.");
              redirect('admin_userlist');
          }
          redirect('admin_userlist');
    }

    public function edituser($id=''){
        $client_id = $this->input->get('id');
        $vms_drive_data = $this->User_model->getVmsDriveData($client_id);
        $vms_users_data = $this->User_model->getVmsUsersData($client_id);
        $all_data = array(
        'vms_drive_data' => $vms_drive_data,
        'vms_users_data' => $vms_users_data
        );
        $this->load->view('admin_edituser',$all_data);
    }
    public function updateprofile(){
          $client_id=$this->input->post('client_id');
          $drive_data = array(
            'client_id'=>$client_id ,
            'google_drive_email' => $this->input->post('google_drive_email'),
            'google_drive_pass' => $this->input->post('google_drive_pass'),
            'google_secret_key' => $this->input->post('google_drive_secretkey'),
            'cloud_folder_id'=>$this->input->post('google_drive_folderid'),
            'cloud_servicekey_path'=>$this->input->post('google_drive_servicejson'),
            'raspi_ssid' => $this->input->post('raspi_ssid'),
            'raspi_pass' => $this->input->post('raspi_pass'),
            'vnc_name' => $this->input->post('vnc_username'),
            'vnc_password' => $this->input->post('vnc_pass')
            );
          $upload_directory = 'assets/img/upload_image/';
          $upload_path = base_url($upload_directory);

          $config['upload_path'] = './' . $upload_directory;
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = 800;
          $this->upload->initialize($config);





          $user_data = array(
          'username' => $this->input->post('username'),
          'device_number' => $this->input->post('deviceid'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phoneNumber1'),
          'address' => $this->input->post('address'),
          'state' => $this->input->post('state'),
          'zipCode' => $this->input->post('zipCode'),
          'country' => $this->input->post('country')
          );
          if ($this->upload->do_upload('upload_img')) {
              $upload_data = $this->upload->data();
              $data['uploaded_image'] = $upload_data['file_name'];
              $user_data = array(
                'profile' =>   $data['uploaded_image']
              );
              $image_url = $upload_path . $data['uploaded_image'];
          }

          $user_data_updated = $this->User_model->edituserDetails($client_id, $user_data);
          $this->User_model->saveOrUpdateDriveData($client_id, $drive_data);
          if ($user_data_updated) {
              $this->session->set_flashdata('success', "Profile Successfully Updated!");

          } else {
              $this->session->set_flashdata('error', "Failed to update user data");
          }
          $vms_drive_data = $this->User_model->getVmsDriveData($client_id);
          $vms_users_data = $this->User_model->getVmsUsersData($client_id);
          $all_data = array(
          'vms_drive_data' => $vms_drive_data,
          'vms_users_data' => $vms_users_data,
          );

          $this->load->view('admin_edituser',$all_data);
    }

    public function userlogin($id= ''){
          $client_id = $this->input->get('id');
          $vms_users_data = $this->User_model->getVmsUsersData($client_id);
          $login_data = array(
          'device_number' => $vms_users_data['device_number'],
          'password' => $vms_users_data['password'],
          );
          $result = $this->User_model->check_login($login_data);
          if ($result['status'] === TRUE)
          {
          $user_data = $result['data'];
          $this->session->set_userdata('user_data', $user_data);
          redirect('dashboard');
          }

    }


    public function deleteuser($id = '') {
          $client_id = $this->input->get('id');
          if (!empty($client_id)) {
              $this->db->where('id', $client_id);
              $result = $this->db->delete('vms_users');

              if ($result) {
                  $this->db->where('client_id', $client_id);
                  $this->db->delete('vms_drive');
                  redirect('admin_userlist');
              }
          }
      }

    public function logout(){
        $this->session->unset_userdata('user_data');
        $this->session->sess_destroy();
        redirect('user');

    }
}

?>
