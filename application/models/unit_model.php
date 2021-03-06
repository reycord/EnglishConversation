<?php
class unit_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // get next unit_id beginner from tbl_learn_vocabulary
    public function getNextUnitBeginnerVocabulary(){
        $this->db->select("CAST(coalesce(max(tbl_learn_vocabulary.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_learn_vocabulary');
        $this->db->join('m_level', 'tbl_learn_vocabulary.level_id = m_level.level_id', 'left');
        $this->db->where("m_level.level_id = 1");
        $this->db->where("tbl_learn_vocabulary.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id intermediate from tbl_learn_vocabulary
    public function getNextUnitIntermediateVocabulary(){
        $this->db->select("CAST(coalesce(max(tbl_learn_vocabulary.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_learn_vocabulary');
        $this->db->join('m_level', 'tbl_learn_vocabulary.level_id = m_level.level_id', 'left');
        $this->db->where("m_level.level_id = 2");
        $this->db->where("tbl_learn_vocabulary.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id advanced from tbl_learn_vocabulary
    public function getNextUnitAdvancedVocabulary(){
        $this->db->select("CAST(coalesce(max(tbl_learn_vocabulary.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_learn_vocabulary');
        $this->db->join('m_level', 'tbl_learn_vocabulary.level_id = m_level.level_id', 'left');
        $this->db->where("m_level.level_id = 3");
        $this->db->where("tbl_learn_vocabulary.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id beginner from tbl_grammar
    public function getNextUnitBeginnerGrammar(){
        $this->db->select("CAST(coalesce(max(tbl_grammar.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_grammar');
        $this->db->join('m_level', 'tbl_grammar.level_id = m_level.level_id', 'left');
        $this->db->where('m_level.level_id = 1');
        $this->db->where("tbl_grammar.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id intermediate from tbl_grammar
    public function getNextUnitIntermediateGrammar(){
        $this->db->select("CAST(coalesce(max(tbl_grammar.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_grammar');
        $this->db->join('m_level', 'tbl_grammar.level_id = m_level.level_id', 'left');
        $this->db->where('m_level.level_id = 2');
        $this->db->where("tbl_grammar.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id advanced from tbl_grammar
    public function getNextUnitAdvancedGrammar(){
        $this->db->select("CAST(coalesce(max(tbl_grammar.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_grammar');
        $this->db->join('m_level', 'tbl_grammar.level_id = m_level.level_id', 'left');
        $this->db->where('m_level.level_id = 3');
        $this->db->where("tbl_grammar.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id beginner from tbl_listening
    public function getNextUnitBeginnerListening(){
        $this->db->select("CAST(coalesce(max(tbl_listening.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_listening');
        $this->db->join('m_level', 'tbl_listening.level_id = m_level.level_id', 'left');
        $this->db->where('m_level.level_id = 1');
        $this->db->where("tbl_listening.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id intermediate from tbl_listening
    public function getNextUnitIntermediateListening(){
        $this->db->select("CAST(coalesce(max(tbl_listening.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_listening');
        $this->db->join('m_level', 'tbl_listening.level_id = m_level.level_id', 'left');
        $this->db->where('m_level.level_id = 2');
        $this->db->where("tbl_listening.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }

    // get next unit_id advanced from tbl_listening
    public function getNextUnitAdvancedListening(){
        $this->db->select("CAST(coalesce(max(tbl_listening.unit_id), '0') AS integer) + 1 as unit_id");
        $this->db->from('tbl_listening');
        $this->db->join('m_level', 'tbl_listening.level_id = m_level.level_id', 'left');
        $this->db->where('m_level.level_id = 3');
        $this->db->where("tbl_listening.del_fg = '0'");
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['unit_id'];
        }
        return null;
    }
}