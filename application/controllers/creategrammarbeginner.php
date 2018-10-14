<?php
class CreateGrammarBeginner extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('unit_model');
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

        $this->load->view('creategrammarbeginner', $data);
    }

    public function checkGrammar(){
        $data = null;
        if (isset($_POST['submit'])){
            //Check validate field data
            $this->form_validation->set_rules('grammar_name', 'Grammar Name', 'trim|required');
            $this->form_validation->set_rules('grammar_details', 'Grammar Details', 'trim|required');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');

            if ($this->form_validation->run() === TRUE){

                if ($_POST['level'] === '1'){
                    $unit_id = $this->unit_model->getNextUnitBeginnerGrammar();
                }elseif($_POST['level'] === '2'){
                    $unit_id = $this->unit_model->getNextUnitIntermediateGrammar();
                }else{
                    $unit_id = $this->unit_model->getNextUnitAdvancedGrammar();
                }

                $grammar_id = $this->admingrammar_model->getNextGrammarId();

                $data = array(
                    'grammar_id' => $grammar_id,
                    'level_id' => $_POST['level'],
                    'grammar_name' => $_POST['grammar_name'],
                    'grammar_details' => $_POST['grammar_details'],
                    'unit_id' => $unit_id,
                    'del_fg' => '0'
                );
                
                //Add data into table TBL_GRAMMAR
                $this->db->insert('tbl_grammar', $data);

                //Redirect to Admin Grammar Page
                redirect('creategrammarbeginner', 'refresh');
            }
            else{
                $this->load->view('creategrammarbeginner', $data);
            }
        }
    }
}