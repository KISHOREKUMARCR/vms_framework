<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller{


    function __construct() { 
        parent::__construct(); 
        $this->load->model('User_model');   
        $this->load->library('session');    
    } 

    public function index()
    {           
        $this->load->view('user_login');
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->input->post('signupSubmit')) {
                $post_email = $this->input->post('email');
                
                // Check if the email is empty
                if (empty($post_email)) {
                    $this->session->set_flashdata('error', "Email cannot be empty!");
                    $this->load->view('register');
                    return; // Stop further processing
                }
    
                // Check if the email already exists
                if ($this->User_model->get_emailaddress($post_email)) {
                    $this->session->set_flashdata('error', "Email already taken!");
                    $this->load->view('register');
                } else {
                    $userData = array(
                        'username' => strip_tags($this->input->post('username')),
                        'email' => strip_tags($post_email), // Use the validated email
                        'password' => strip_tags($this->input->post('password')),
                        'device_number' => strip_tags($this->input->post('device_number'))
                    );
    
                    $insert_data_response = $this->User_model->insertUsers($userData);
                    $data['user'] = $userData;
    
                    if ($insert_data_response) {
                        $this->session->set_flashdata('success', "Saved Successfully!");
                    } else {
                        $this->session->set_flashdata('error', "Registration failed.");
                    }
    
                    $this->load->view('register', $data);
                }
            }
        } else {
            $this->load->view('register');
        }
    }
    

    public function dashboard(){
        $this->load->view('dashboard');
    }
    public function live_view(){
        $this->load->view('live_alive');
    }
    public function report(){
        $this->load->view('report');
    }
    public function edit_info(){
        $this->load->view('edit_info');
    }
    public function user_profile(){
        $this->load->view('user_profile');
    }
}


?>