<?php
class Translate extends My_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Translate/index');
    }
}