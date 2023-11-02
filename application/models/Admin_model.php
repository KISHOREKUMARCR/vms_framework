<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }    
    public function check_login($userData) {
        $query = $this->db->get_where('admin_info', array('email' => $userData['email'],'password'=> $userData['password']) );
        if ($this->db->affected_rows() > 0)
         {
            return [
                'status' => TRUE,
                'data' => $query->row()
            ];          
        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
    }
    public function get_user_details(){ 
        $this->db->select("*");
        $result = $this->db->get('vms_users');
        return $result->result_array ();
   ;  
    }
}
?>