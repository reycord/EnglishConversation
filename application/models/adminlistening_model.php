<?php
class adminlistening_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //get next listening_id from tbl_listening
    public function getNextListeningId()
    {
        $this->db->select('max(listening_id) + 1 listening_id');
        $this->db->from('tbl_listening');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['listening_id'];
        }
        return 0;
    }

    //get data beginner with unit_id from tbl_listening
    public function getDataListeningBeginnerWithUnitId($unit_id){
        $this->db->select('tbl_listening.listening_name as listening_name');
        $this->db->select('tbl_listening.listening_details as listening_details');
        $this->db->from('tbl_listening');
        $this->db->where('tbl_listening.level_id', '1');
        $this->db->where('tbl_listening.unit_id', $unit_id);
        $this->db->where('tbl_listening.del_fg', '0');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    public function did_delete_row_beginner($unit_id){
        $this->db->where('unit_id', $unit_id);
        $this->db->where('level_id', '1');
        $this->db->where('del_fg', '0');
        $this->db->delete('tbl_listening');
    }

    //get data intermediate with unit_id from tbl_listening
    public function getDataListeningIntermediateWithUnitId($unit_id){
        $this->db->select('tbl_listening.listening_name as listening_name');
        $this->db->select('tbl_listening.listening_details as listening_details');
        $this->db->from('tbl_listening');
        $this->db->where('tbl_listening.level_id', '2');
        $this->db->where('tbl_listening.unit_id', $unit_id);
        $this->db->where('tbl_listening.del_fg', '0');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    public function did_delete_row_intermediate($unit_id){
        $this->db->where('unit_id', $unit_id);
        $this->db->where('level_id', '2');
        $this->db->where('del_fg', '0');
        $this->db->delete('tbl_listening');
    }

    //get data advanced with unit_id from tbl_listening
    public function getDataListeningAdvancedWithUnitId($unit_id){
        $this->db->select('tbl_listening.listening_name as listening_name');
        $this->db->select('tbl_listening.listening_details as listening_details');
        $this->db->from('tbl_listening');
        $this->db->where('tbl_listening.level_id', '3');
        $this->db->where('tbl_listening.unit_id', $unit_id);
        $this->db->where('tbl_listening.del_fg', '0');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    public function did_delete_row_advanced($unit_id){
        $this->db->where('unit_id', $unit_id);
        $this->db->where('level_id', '3');
        $this->db->where('del_fg', '0');
        $this->db->delete('tbl_listening');
    }
}