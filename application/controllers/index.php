<?php
class Index extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('index');
    }
}