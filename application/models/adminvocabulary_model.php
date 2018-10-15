<?php
class adminvocabulary_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //get max learn_vocabulary_id from tbl_learn_vocabulary
    public function getMaxLearnVocabularyId()
    {
        $this->db->select('max(learn_vocabulary_id) learn_vocabulary_id');
        $this->db->from('tbl_learn_vocabulary');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['learn_vocabulary_id'];
        }
        return 0;
    }
    //get data with unit_id from tbl_learn_vocabulary
    public function getDataVocabularyWithUnitId($unit_id){
        $this->db->select('tbl_learn_vocabulary.vocabulary_name as vocabulary_name');
        $this->db->select('tbl_learn_vocabulary.vocabulary_mean as vocabulary_mean');
        $this->db->select('tbl_learn_vocabulary.screen_id as screen_id');
        $this->db->from('tbl_learn_vocabulary');
        $this->db->where('tbl_learn_vocabulary.level_id', '1');
        $this->db->where('tbl_learn_vocabulary.unit_id', $unit_id);
        $this->db->where('tbl_learn_vocabulary.del_fg', '0');
        $this->db->order_by('tbl_learn_vocabulary.screen_id');
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
        $this->db->delete('tbl_learn_vocabulary');
    }
}