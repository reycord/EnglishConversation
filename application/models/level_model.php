<?php
class level_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // get level name from table m_level
    public function getLevelName()
    {
        $this->db->select('level_id');
        $this->db->select('level_name');
        $this->db->from('m_level');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }
}