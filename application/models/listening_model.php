<?php
class listening_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // get unit name from table tbl_unit
    public function getUnitNameBeginner()
    {
        $this->db->select('tbl_listening.level_id as level_id');
        $this->db->select('tbl_unit.unit_id as unit_id');
        $this->db->select('tbl_unit.unit_name as unit_name');
        $this->db->from('tbl_unit');
        $this->db->join('tbl_listening', "tbl_unit.unit_id = tbl_listening.unit_id and tbl_listening.level_id = '1'", 'right');
        $this->db->group_by('tbl_listening.level_id');
        $this->db->group_by('tbl_unit.unit_id');
        $this->db->order_by('tbl_listening.level_id');
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
        $this->db->select('tbl_listening.level_id as level_id');
        $this->db->select('tbl_unit.unit_id as unit_id');
        $this->db->select('tbl_unit.unit_name as unit_name');
        $this->db->from('tbl_unit');
        $this->db->join('tbl_listening', "tbl_unit.unit_id = tbl_listening.unit_id and tbl_listening.level_id = '2'", 'right');
        $this->db->group_by('tbl_listening.level_id');
        $this->db->group_by('tbl_unit.unit_id');
        $this->db->order_by('tbl_listening.level_id');
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
        $this->db->select('tbl_listening.level_id as level_id');
        $this->db->select('tbl_unit.unit_id as unit_id');
        $this->db->select('tbl_unit.unit_name as unit_name');
        $this->db->from('tbl_unit');
        $this->db->join('tbl_listening', "tbl_unit.unit_id = tbl_listening.unit_id and tbl_listening.level_id = '3'", 'right');
        $this->db->group_by('tbl_listening.level_id');
        $this->db->group_by('tbl_unit.unit_id');
        $this->db->order_by('tbl_listening.level_id');
        $this->db->order_by('tbl_unit.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get word from table tbl_listening
    public function getListeningBeginner()
    {
        $this->db->select('tbl_listening.level_id as level_id');
        $this->db->select('tbl_listening.listening_name as listening_name');
        $this->db->select('tbl_listening.listening_details as listening_details');
        $this->db->select('tbl_listening.link_media as link_media');
        $this->db->select('tbl_listening.unit_id as unit_id');
        $this->db->from('tbl_listening');
        $this->db->join('m_level', "tbl_listening.level_id = m_level.level_id and tbl_listening.level_id = '1'", 'left');
        $this->db->join('tbl_unit', 'tbl_listening.unit_id = tbl_unit.unit_id', 'left');
        $this->db->order_by('tbl_listening.level_id');
        $this->db->order_by('tbl_listening.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get word from table tbl_listening
    public function getListeningIntermediate()
    {
        $this->db->select('tbl_listening.level_id as level_id');
        $this->db->select('tbl_listening.listening_name as listening_name');
        $this->db->select('tbl_listening.listening_details as listening_details');
        $this->db->select('tbl_listening.link_media as link_media');
        $this->db->select('tbl_listening.unit_id as unit_id');
        $this->db->from('tbl_listening');
        $this->db->join('m_level', "tbl_listening.level_id = m_level.level_id and tbl_listening.level_id = '2'", 'left');
        $this->db->join('tbl_unit', 'tbl_listening.unit_id = tbl_unit.unit_id', 'left');
        $this->db->order_by('tbl_listening.level_id');
        $this->db->order_by('tbl_listening.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get word from table tbl_listening
    public function getListeningAdvanced()
    {
        $this->db->select('tbl_listening.level_id as level_id');
        $this->db->select('tbl_listening.listening_name as listening_name');
        $this->db->select('tbl_listening.listening_details as listening_details');
        $this->db->select('tbl_listening.link_media as link_media');
        $this->db->select('tbl_listening.unit_id as unit_id');
        $this->db->from('tbl_listening');
        $this->db->join('m_level', "tbl_listening.level_id = m_level.level_id and tbl_listening.level_id = '3'", 'left');
        $this->db->join('tbl_unit', 'tbl_listening.unit_id = tbl_unit.unit_id', 'left');
        $this->db->order_by('tbl_listening.level_id');
        $this->db->order_by('tbl_listening.unit_id');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }
}