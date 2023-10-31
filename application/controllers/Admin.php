<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function index(){
        $this->load->view('admin_login');
    }
    public function userlist(){
        $this->load->view('admin_userlist');
    }
    public function edituser(){
        $this->load->view('admin_edituser');
    }
}

?>