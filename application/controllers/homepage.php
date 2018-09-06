<?php
class Homepage extends My_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        // Load the subview
        $content = $this->load->view(('index'));
    }
}