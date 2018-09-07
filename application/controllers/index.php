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
}