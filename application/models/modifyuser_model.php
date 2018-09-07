<?php
class modifyuser_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // check email in m_user table
    public function checkEmail($email)
    {
        $this->db->select("email");
        $this->db->from('m_user');
        $this->db->where('email', $email);
        $this->db->where('del_fg', '0');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0];
        }
        return null;
    }
}