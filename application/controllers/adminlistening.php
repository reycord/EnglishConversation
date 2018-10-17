<?php
class AdminListening extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('unit_model');
        $this->load->model('level_model');
        $this->load->model('listening_model');
        $this->load->model('adminlistening_model');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
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

        $this->load->view('adminlistening', $data);
    }

    public function beginner(){
        $data = null;
        
        //Get data unit
        $dataunit = $this->listening_model->getUnitNameBeginner();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view listening beginner
        $this->load->view('adminlistening/beginner', $data);
    }

    public function delete_row_beginner($unit_id){
        $this->adminlistening_model->did_delete_row_beginner($unit_id);

        $data = null;
        
        //Get data unit
        $dataunit = $this->listening_model->getUnitNameBeginner();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view listening beginner
        $this->load->view('adminlistening/beginner', $data);
    }

    public function intermediate(){
        $data = null;
        
        //Get data unit
        $dataunit = $this->listening_model->getUnitNameIntermediate();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view listening intermediate
        $this->load->view('adminlistening/intermediate', $data);
    }

    public function delete_row_intermediate($unit_id){
        $this->adminlistening_model->did_delete_row_intermediate($unit_id);

        $data = null;
        
        //Get data unit
        $dataunit = $this->listening_model->getUnitNameIntermediate();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view listening intermediate
        $this->load->view('adminlistening/intermediate', $data);
    }

    public function advanced(){
        $data = null;
        
        //Get data unit
        $dataunit = $this->listening_model->getUnitNameAdvanced();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view listening advanced
        $this->load->view('adminlistening/advanced', $data);
    }

    public function delete_row_advanced($unit_id){
        $this->adminlistening_model->did_delete_row_advanced($unit_id);

        $data = null;
        
        //Get data unit
        $dataunit = $this->listening_model->getUnitNameAdvanced();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view listening advanced
        $this->load->view('adminlistening/advanced', $data);
    }
}