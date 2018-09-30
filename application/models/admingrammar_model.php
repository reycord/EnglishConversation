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
}