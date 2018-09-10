<?php
class QuestionAndAnswer extends My_Controller {

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
        $this->load->view('questionandanswer', $data);
    }
}