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
        return $result->result_array();
    }

    public function saveOrUpdateRealtimekitData($kit_id, $Realtimedata_Raspi) {
        $existing_data = $this->getkitData($kit_id);
        if ($existing_data) {
            $this->db->where('kit_id', $kit_id);
            $this->db->update('raspi_info', $Realtimedata_Raspi);
            return 0;

        } else {
          $this->db->insert('raspi_info', $Realtimedata_Raspi);
            return 1;
        }
    }

    public function getkitData($kit_id) {
        $query = $this->db->get_where('raspi_info', array('kit_id' => $kit_id));
        return $query->row();
    }

    

}
?>
