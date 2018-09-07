<?php
class ModifyUser extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('modifyuser_model');
    }

    public function index()
    {
        $this->load->view('modifyuser');
    }
}