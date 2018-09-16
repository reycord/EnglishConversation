<?php
class vocabulary_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // get unit name from table tbl_unit
    public function getUnitNameBeginner()
    {
        $this->db->select('tbl_learn_vocabulary.level_id as level_id');
        $this->db->select('tbl_unit.unit_id as unit_id');
        $this->db->select('tbl_unit.unit_name as unit_name');
        $this->db->select('tbl_unit.unit_image as unit_image');
        $this->db->from('tbl_unit');
        $this->db->join('tbl_learn_vocabulary', "tbl_unit.unit_id = tbl_learn_vocabulary.unit_id and tbl_learn_vocabulary.level_id = '1'", 'right');
        $this->db->group_by('tbl_learn_vocabulary.level_id');
        $this->db->group_by('tbl_unit.unit_id');
        $this->db->order_by('tbl_learn_vocabulary.level_id');
        $this->db->order_by('tbl_unit.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get unit name from table tbl_unit
    public function getUnitNameIntermediate()
    {
        $this->db->select('tbl_learn_vocabulary.level_id as level_id');
        $this->db->select('tbl_unit.unit_id as unit_id');
        $this->db->select('tbl_unit.unit_name as unit_name');
        $this->db->select('tbl_unit.unit_image as unit_image');
        $this->db->from('tbl_unit');
        $this->db->join('tbl_learn_vocabulary', "tbl_unit.unit_id = tbl_learn_vocabulary.unit_id and tbl_learn_vocabulary.level_id = '2'", 'right');
        $this->db->group_by('tbl_learn_vocabulary.level_id');
        $this->db->group_by('tbl_unit.unit_id');
        $this->db->order_by('tbl_learn_vocabulary.level_id');
        $this->db->order_by('tbl_unit.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get unit name from table tbl_unit
    public function getUnitNameAdvanced()
    {
        $this->db->select('tbl_learn_vocabulary.level_id as level_id');
        $this->db->select('tbl_unit.unit_id as unit_id');
        $this->db->select('tbl_unit.unit_name as unit_name');
        $this->db->select('tbl_unit.unit_image as unit_image');
        $this->db->from('tbl_unit');
        $this->db->join('tbl_learn_vocabulary', "tbl_unit.unit_id = tbl_learn_vocabulary.unit_id and tbl_learn_vocabulary.level_id = '3'", 'right');
        $this->db->group_by('tbl_learn_vocabulary.level_id');
        $this->db->group_by('tbl_unit.unit_id');
        $this->db->order_by('tbl_learn_vocabulary.level_id');
        $this->db->order_by('tbl_unit.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get word from table tbl_learn_vocabulary
    public function getVocabulary()
    {
        $this->db->select('tbl_learn_vocabulary.level_id as level_id');
        $this->db->select('tbl_learn_vocabulary.vocabulary_name as vocabulary_name');
        $this->db->select('tbl_learn_vocabulary.vocabulary_mean as vocabulary_mean');
        $this->db->select('tbl_learn_vocabulary.unit_id as unit_id');
        $this->db->from('tbl_learn_vocabulary');
        $this->db->join('m_level', 'tbl_learn_vocabulary.level_id = m_level.level_id', 'left');
        $this->db->join('tbl_unit', 'tbl_learn_vocabulary.unit_id = tbl_unit.unit_id', 'left');
        $this->db->order_by('tbl_learn_vocabulary.level_id');
        $this->db->order_by('tbl_learn_vocabulary.unit_id');
        $this->db->order_by('tbl_learn_vocabulary.screen_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }
}