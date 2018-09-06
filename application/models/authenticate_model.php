<?php
class authenticate_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // check login user in m_user table
    public function checkLogin($email, $password)
    {
        $this->db->select('user_name');
        $this->db->select('email');
        $this->db->select('admin_flag');
        $this->db->from('m_user');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $this->db->where('del_fg', '0');
        $query = $this->db->get();
        $result = $query->result_array();
        if (sizeof($result) > 0) {
            return $result[0];
        }
        return null;
    }
}