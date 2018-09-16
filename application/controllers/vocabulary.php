<?php
class Vocabulary extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('level_model');
        $this->load->model('vocabulary_model');
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

        //Get data level
        $datalevel = $this->level_model->getLevelName();

        $data['datalevel'] = $datalevel;
        //Load view vocabulary
        $this->load->view('vocabulary', $data);
    }

    public function beginner(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Get data unit
        $dataunit = $this->vocabulary_model->getUnitName();

        $data['dataunit'] = $dataunit;
        //Load view vocabulary beginner
        $this->load->view('vocabulary/beginner', $data);
    }

    public function beginnerunit(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Get data unit
        $dataunit = $this->vocabulary_model->getUnitName();

        $data['dataunit'] = $dataunit;
        //Load view vocabulary beginner
        $this->load->view('vocabulary/beginnerunit', $data);
    }
}