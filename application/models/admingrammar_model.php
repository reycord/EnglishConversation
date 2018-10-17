<?php
class admingrammar_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //get next grammar_id from tbl_grammar
    public function getNextGrammarId()
    {
        $this->db->select('max(grammar_id) + 1 grammar_id');
        $this->db->from('tbl_grammar');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['grammar_id'];
        }
        return 0;
    }

    //get data beginner with unit_id from tbl_grammar
    public function getDataGrammarBeginnerWithUnitId($unit_id){
        $this->db->select('tbl_grammar.grammar_name as grammar_name');
        $this->db->select('tbl_grammar.grammar_details as grammar_details');
        $this->db->from('tbl_grammar');
        $this->db->where('tbl_grammar.level_id', '1');
        $this->db->where('tbl_grammar.unit_id', $unit_id);
        $this->db->where('tbl_grammar.del_fg', '0');
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
        $this->db->delete('tbl_grammar');
    }

    //get data intermediate with unit_id from tbl_listening
    public function getDataGrammarIntermediateWithUnitId($unit_id){
        $this->db->select('tbl_grammar.grammar_name as grammar_name');
        $this->db->select('tbl_grammar.grammar_details as grammar_details');
        $this->db->from('tbl_grammar');
        $this->db->where('tbl_grammar.level_id', '2');
        $this->db->where('tbl_grammar.unit_id', $unit_id);
        $this->db->where('tbl_grammar.del_fg', '0');
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
        $this->db->delete('tbl_grammar');
    }

    //get data advanced with unit_id from tbl_listening
    public function getDataGrammarAdvancedWithUnitId($unit_id){
        $this->db->select('tbl_grammar.grammar_name as grammar_name');
        $this->db->select('tbl_grammar.grammar_details as grammar_details');
        $this->db->from('tbl_grammar');
        $this->db->where('tbl_grammar.level_id', '3');
        $this->db->where('tbl_grammar.unit_id', $unit_id);
        $this->db->where('tbl_grammar.del_fg', '0');
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
        $this->db->delete('tbl_grammar');
    }
}