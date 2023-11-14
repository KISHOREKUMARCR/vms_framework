<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class User extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('user_login');
        }
        else
        {
            $login_data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $result = $this->User_model->check_login($login_data);
            if ($result['status'] === TRUE)
            {
                $user_data = $result['data'];
                $this->session->set_userdata('user_data', $user_data);
                redirect('dashboard');
            }
            else{
                $this->session->set_flashdata('login_error', 'Invalid email or password.');
                $this->load->view('user_login');
            }
        }
    }

    public function register() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('device_number', 'Device Number', 'trim|required');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->form_validation->run() == true) {

                $email = $this->input->post('email');
                $email_exists = $this->User_model->checkEmailExists($email);

                if($email_exists){
                    $this->session->set_flashdata('error', "Email already exists. Please choose another email.");
                    $this->load->view('register');
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
                } else {
                    $this->session->set_flashdata('error', "Registration failed.");
                }
                $this->load->view('register');
            } else {

                $this->load->view('register');
            }
        }else{
            $this->load->view('register');
        }
    }

    public function dashboard(){
        $user_data = $this->session->userdata('user_data');
        $user_kitid=$user_data->device_number;
        $user_Primaryid=$user_data->id;
        $user_drive_data = $this->User_model->getVmsDriveData($user_Primaryid);
        $user_data = $this->User_model->getUserData($user_kitid);
        $user_raspi_data=$this->User_model->getRaspiData($user_kitid);
        $userInfo = array(
        'user_cloud_data' => $user_drive_data,
        'users_data' => $user_data,
        'users_raspidata' =>$user_raspi_data
        );

        $this->load->view('dashboard',$userInfo);
    }

    public function edit_info() {

        $user_data = $this->session->userdata('user_data');
        $client_id = $user_data->id;

        #$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('deviceid', 'Device ID', 'required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email');
        $this->form_validation->set_rules('phoneNumber1', 'Phone Number', 'required|numeric');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zipCode', 'Zip Code', 'required|numeric');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('google_drive_email', 'Cloud Email', 'valid_email');
        $this->form_validation->set_rules('google_drive_pass', 'Cloud Password', 'required');
        $this->form_validation->set_rules('google_drive_secretkey', 'Cloud Key', 'required');
        $this->form_validation->set_rules('raspi_ssid', 'Kit SSID', 'required');
        $this->form_validation->set_rules('raspi_pass', 'Kit Password', 'required');
        $this->form_validation->set_rules('vnc_username', 'VNC Username', 'required');
        $this->form_validation->set_rules('vnc_pass', 'VNC Password', 'required');

        $vms_drive_data = $this->User_model->getVmsDriveData($client_id);
        $vms_users_data = $this->User_model->getVmsUsersData($client_id);
        $all_data = array(
        'vms_drive_data' => $vms_drive_data,
        'vms_users_data' => $vms_users_data,
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('edit_info',$all_data);
        } else {
                $drive_data = array(
                'client_id'=>$client_id ,
                'google_drive_email' => $this->input->post('google_drive_email'),
                'google_drive_pass' => $this->input->post('google_drive_pass'),
                'google_secret_key' => $this->input->post('google_drive_secretkey'),
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
                  $image_url = $upload_path . $data['uploaded_image'];
                  $user_data = array(
                    'profile' =>   $data['uploaded_image']
                  );
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
                $this->load->view('edit_info',$all_data);
        }
    }

    public function user_profile(){
        $user_data = $this->session->userdata('user_data');
        $client_id = $user_data->id;

        $vms_drive_data = $this->User_model->getVmsDriveData($client_id);
        $vms_users_data = $this->User_model->getVmsUsersData($client_id);
        $all_data = array(
        'vms_drive_data' => $vms_drive_data,
        'vms_users_data' => $vms_users_data,
        );
        $this->load->view('user_profile',$all_data);

    }


    public function report(){

        $user_data = $this->session->userdata('user_data');
        $client_id = $user_data->id;
        $client_kitid=$user_data->device_number;
        // #######################################
        $user_cloud_data=$this->User_model->getcloudReport($client_kitid);
        $json_alldata = array(
        'data'=>$user_cloud_data
        );
        $json_data = json_encode($json_alldata,JSON_PRETTY_PRINT);
        $folderPath='JsonData/';
        if (!file_exists($folderPath)){
        mkdir($folderPath,0777,true);
        }
        $dataPath = $folderPath . 'cloud_report.json';
        file_put_contents($dataPath, $json_data);

        // #######################################
        $this->load->view('report1',$all_data);
    }

        public function getJsonData() {
            // Specify the path to the JSON file
            $json_file_path = 'JsonData/cloud_report.json';

            if (file_exists($json_file_path)) {
            $json_data = file_get_contents($json_file_path);
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



    public function live_view(){
        $user_data = $this->session->userdata('user_data');
        $client_kitid=$user_data->device_number;

        $user_raspi_data=$this->User_model->getRaspiData($client_kitid);
        $userInfo = array(
        'users_raspidata' =>$user_raspi_data,
        'client_kitid' =>$client_kitid
        );

        $this->load->view('live_alive',$userInfo);
    }

    public function capture_frame(){
      $user_data = $this->session->userdata('user_data');
      $client_kitid=$user_data->device_number;
      $buttonValue = $this->input->post('buttonValue');
      echo $buttonValue;
      $switch_data = array('live_switch' => $buttonValue);
      $this->User_model->UpdateSwitch($client_kitid, $switch_data);
    }

    public function logout1(){
        $this->session->unset_userdata('user_data');
        $this->session->sess_destroy();
        redirect('user');

    }

}


?>
