<?php
class registration_model extends My_Model
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

    //get max user_id from m_user
    public function getMaxUserId()
    {
        $this->db->select("CAST(coalesce(max(user_id), '0') AS integer) as user_id");
        $this->db->from('m_user');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0]['user_id'];
        }
        return 0;
    }
}