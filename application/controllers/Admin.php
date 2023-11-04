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
        $this->load->view('admin_login');
    }



    public function userlist(){
        $data['users'] = $this->Admin_model->get_user_details();
        $this->load->view('admin_userlist',$data);
    }

    public function edituser($id=''){
        $client_id = $this->input->get('id');
        $vms_drive_data = $this->User_model->getVmsDriveData($client_id);
        $vms_users_data = $this->User_model->getVmsUsersData($client_id);
        $all_data = array(
        'vms_drive_data' => $vms_drive_data,
        'vms_users_data' => $vms_users_data
        );

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

        if ($this->upload->do_upload('upload_img')) {
        $upload_data = $this->upload->data();
        $data['uploaded_image'] = $upload_data['file_name'];
        $image_url = $upload_path . $data['uploaded_image'];
        }
        $user_data = array(
        'username' => $this->input->post('username'),
        'device_number' => $this->input->post('deviceid'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phoneNumber1'),
        'address' => $this->input->post('address'),
        'state' => $this->input->post('state'),
        'zipCode' => $this->input->post('zipCode'),
        'country' => $this->input->post('country'),
        'profile' => $data['uploaded_image']
        );

        $user_data_updated = $this->User_model->edituserDetails($client_id, $user_data);
        $this->User_model->saveOrUpdateDriveData($client_id, $drive_data);
        if ($user_data_updated) {
            $this->session->set_flashdata('success', "Profile Successfully Updated!");
           # $this->load->view('admin_userlist');
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



    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('user_data');
        redirect('admin');
    }
}

?>
