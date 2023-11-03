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
    public function checkEmailExists($email){
        $this->db->where('email',$email);
        $query=$this->db->get('vms_users');
        return $query->num_rows() > 0;
    }

    public function saveOrUpdateDriveData($client_id, $drive_data) {
        $existing_data = $this->getDriveData($client_id);

        if ($existing_data) {
            $this->db->where('client_id', $client_id);
            $this->db->update('vms_drive', $drive_data);
        } else {
            $this->db->insert('vms_drive', $drive_data);
        }
    }

    public function getDriveData($client_id) {
        $query = $this->db->get_where('vms_drive', array('client_id' => $client_id));
        return $query->row();
    }

    public function edituserDetails($client_id, $user_data){
        $this->db->where('id', $client_id);
        $query=$this->db->update('vms_users', $user_data);
        return $query;
    }

    public function getVmsDriveData($client_id){
        $this->db->select('*');
        $this->db->from('vms_drive');
        $this->db->where('client_id', $client_id);
        $query = $this->db->get();
        return $query->row_array();
    }

   public function getRaspiData($user_kitid){
       $this->db->select('*');
       $this->db->from('raspi_info');
       $this->db->where('kit_id', $user_kitid);
       $query = $this->db->get();
       return $query->row_array();
   }


    public function getVmsUsersData($client_id){
        $this->db->select('*');
        $this->db->from('vms_users');
        $this->db->where('id', $client_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getUserData($client_id){
        $this->db->select('*');
        $this->db->from('vms_users');
        $this->db->where('device_number', $client_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function check_login($userData) {
        $query = $this->db->get_where('vms_users', array('email' => $userData['email'],'password'=> $userData['password']) );
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
}

?>
