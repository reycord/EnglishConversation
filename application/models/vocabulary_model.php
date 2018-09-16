<?php
class vocabulary_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // get unit name from table tbl_unit
    public function getUnitName()
    {
        $this->db->select('unit_id');
        $this->db->select('unit_name');
        $this->db->select('unit_image');
        $this->db->from('tbl_unit');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }
}