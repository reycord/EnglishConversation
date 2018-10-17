<?php
class AdminGrammar extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('unit_model');
        $this->load->model('level_model');
        $this->load->model('grammar_model');
        $this->load->model('admingrammar_model');
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
        $datalevel = $this->level_model->getLevelNameGrammar();

        $data['datalevel'] = $datalevel;

        $this->load->view('admingrammar', $data);
    }

    public function beginner(){
        $data = null;
        
        //Get data unit
        $dataunit = $this->grammar_model->getUnitNameBeginner();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view grammar beginner
        $this->load->view('admingrammar/beginner', $data);
    }

    public function delete_row_beginner($unit_id){
        $this->admingrammar_model->did_delete_row_beginner($unit_id);

        $data = null;
        
        //Get data unit
        $dataunit = $this->grammar_model->getUnitNameBeginner();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view grammar beginner
        $this->load->view('admingrammar/beginner', $data);
    }

    public function intermediate(){
        $data = null;
        
        //Get data unit
        $dataunit = $this->grammar_model->getUnitNameIntermediate();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view grammar intermediate
        $this->load->view('admingrammar/intermediate', $data);
    }

    public function delete_row_intermediate($unit_id){
        $this->admingrammar_model->did_delete_row_intermediate($unit_id);

        $data = null;
        
        //Get data unit
        $dataunit = $this->grammar_model->getUnitNameIntermediate();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view grammar intermediate
        $this->load->view('admingrammar/intermediate', $data);
    }

    public function advanced(){
        $data = null;
        
        //Get data unit
        $dataunit = $this->grammar_model->getUnitNameAdvanced();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view grammar advanced
        $this->load->view('admingrammar/advanced', $data);
    }

    public function delete_row_advanced($unit_id){
        $this->admingrammar_model->did_delete_row_advanced($unit_id);

        $data = null;
        
        //Get data unit
        $dataunit = $this->grammar_model->getUnitNameAdvanced();

        $data['dataunit'] = $dataunit;
        
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }

        //Load view grammar advanced
        $this->load->view('admingrammar/advanced', $data);
    }
}