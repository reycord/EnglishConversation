<?php
class Listening extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('level_model');
        $this->load->model('listening_model');
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
        $datalevel = $this->level_model->getLevelNameListening();

        $data['datalevel'] = $datalevel;
        //Load view vocabulary
        $this->load->view('listening', $data);
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
        $dataunit = $this->listening_model->getUnitNameBeginner();

        $data['dataunit'] = $dataunit;
        //Load view listening beginner
        $this->load->view('listening/beginner', $data);
    }

    public function intermediate(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Get data unit
        $dataunit = $this->listening_model->getUnitNameIntermediate();

        $data['dataunit'] = $dataunit;
        //Load view listening intermediate
        $this->load->view('listening/intermediate', $data);
    }

    public function advanced(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Get data unit
        $dataunit = $this->listening_model->getUnitNameAdvanced();

        $data['dataunit'] = $dataunit;
        //Load view listening advanced
        $this->load->view('listening/advanced', $data);
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
        $datalistening = $this->listening_model->getListeningBeginner();

        $data['datalistening'] = $datalistening;
        //Load view listening beginner
        $this->load->view('listening/beginnerunit', $data);
    }

    public function intermediateunit(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Get data unit
        $datalistening = $this->listening_model->getListeningIntermediate();

        $data['datalistening'] = $datalistening;
        //Load view listening intermediateunit
        $this->load->view('listening/intermediateunit', $data);
    }

    public function advancedunit(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Get data unit
        $datalistening = $this->listening_model->getListeningAdvanced();

        $data['datalistening'] = $datalistening;
        //Load view datalistening advanced
        $this->load->view('listening/advancedunit', $data);
    }
}