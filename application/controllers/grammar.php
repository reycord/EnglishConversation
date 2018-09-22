<?php
class Grammar extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('level_model');
        $this->load->model('grammar_model');
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

        //Load view grammar
        $this->load->view('grammar', $data);
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
        $dataunit = $this->grammar_model->getUnitNameBeginner();

        $data['dataunit'] = $dataunit;
        //Load view grammar beginner
        $this->load->view('grammar/beginner', $data);
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
        $dataunit = $this->grammar_model->getUnitNameIntermediate();

        $data['dataunit'] = $dataunit;
        //Load view grammar intermediate
        $this->load->view('grammar/intermediate', $data);
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
        $dataunit = $this->grammar_model->getUnitNameAdvanced();

        $data['dataunit'] = $dataunit;
        //Load view grammar advanced
        $this->load->view('grammar/advanced', $data);
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
        $datagrammar = $this->grammar_model->getGrammarBeginner();

        $data['datagrammar'] = $datagrammar;
        //Load view grammar beginner
        $this->load->view('grammar/beginnerunit', $data);
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
        $datagrammar = $this->grammar_model->getGrammarIntermediate();

        $data['datagrammar'] = $datagrammar;
        //Load view grammar intermediateunit
        $this->load->view('grammar/intermediateunit', $data);
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
        $datagrammar = $this->grammar_model->getGrammarAdvanced();

        $data['datagrammar'] = $datagrammar;
        //Load view grammar advanced
        $this->load->view('grammar/advancedunit', $data);
    }
}