<?php
class modifyuser_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // update information in m_user table
    public function checkUpdate($email, $username, $birthday, $phone_number, $address)
    {
        $this->db->trans_begin();
        $data = array (
            'user_name' => $username,
            'birth_date' => $birthday,
            'phone_number' => $phone_number,
            'address' => $address
        );
        $this->db->where('email', $email);
        $this->db->where('del_fg', '0');
        $this->db->update('m_user', $data);
        if ($this->db->trans_status() === false){
            $this->db->trans_rollback();
            return false;
        } else{
            $this->db->trans_commit();
            return true;
        }
    }
}