<?php
class Index extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }
        $params = $_SERVER['QUERY_STRING'];
        if (strpos($params, 'search=') !== false) {
            $splitURL = explode('search=', $params)[1];
            $splitURL = utf8_decode(urldecode($splitURL));
            $this->db->select('word_details');
            $this->db->from('tbl_word_dictionary');
            $this->db->where('word_name', $splitURL);
            $query = $this->db->get();
            $result = $query->result_array();
            $data['word_name'] = $splitURL;
            $data['word_details'] = $result[0]['word_details'];
        }
        $this->load->view('index', $data);
    }

    public function signout()
    {
        $user = $this->session->userdata('user');
        if (isset($user)) {
            $this->session->unset_userdata('user');
            // $this->session->sess_destroy();
        }
        redirect('authenticate', "refresh");
    }

    public function getWordName(){
        $keyword = $this->input->get('query');
        $this->db->select('word_name');
        $this->db->from('tbl_word_dictionary');
        $this->db->like('word_name', $keyword);
        $query = $this->db->get();
        $hasil = $query->result();
        $data = array();
        foreach ($hasil as $hsl)
        {
            $data[] = $hsl->word_name;
        }
        echo json_encode($data);
    }
}