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
}