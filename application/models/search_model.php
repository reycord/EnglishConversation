<?php
class search_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // get word from tbl_word_dictionary
    public function getWord($keyword){
        $this->db->select('word_name');
        $this->db->from('tbl_word_dictionary');
        $this->db->like('word_name', $keyword);
        $query = $this->db->get();
        $result = $query->result();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }

    // get details word from tbl_word_dictionary
    public function getDetailsWord($word_name){
        $this->db->select('word_details');
        $this->db->from('tbl_word_dictionary');
        $this->db->where('word_name', $word_name);
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result;
        }
        return null;
    }
}