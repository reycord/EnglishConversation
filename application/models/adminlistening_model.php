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
}