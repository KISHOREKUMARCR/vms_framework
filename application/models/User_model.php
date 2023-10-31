<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    public function insertUsers($userData) {       
        $query = $this->db->insert('vms_users',$userData);
        return $query;
    }
    public function get_emailaddress($email){
        
        $this->db->select('*');
        $this->db->from('vms_users');
        $this->db->where('email',$email);
        $query=$this->db->get();
        return $query->num_rows();
    }
}

?>