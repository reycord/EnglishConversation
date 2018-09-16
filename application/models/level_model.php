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
        $this->db->select('m_level.level_id as level_id');
        $this->db->select('m_level.level_name as level_name');
        $this->db->select('m_level.level_image as level_image');
        $this->db->select('count(tbl_learn_vocabulary.level_id) as total');
        $this->db->from('m_level');
        $this->db->join('tbl_learn_vocabulary', 'm_level.level_id = tbl_learn_vocabulary.level_id', 'left');
        $this->db->group_by('m_level.level_id');
        $this->db->order_by('m_level.level_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }
}