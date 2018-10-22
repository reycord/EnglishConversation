<?php
class Index extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('search_model');
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
            $result = $this->search_model->getDetailsWord($splitURL);
            if($result != null){
                $data['word_name'] = $splitURL;
                $data['word_details'] = $result[0]['word_details'];
            }
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
        $hasil = $this->search_model->getWord($keyword);
        $data = array();
        foreach ($hasil as $hsl)
        {
            $data[] = $hsl->word_name;
        }
        echo json_encode($data);
    }
}