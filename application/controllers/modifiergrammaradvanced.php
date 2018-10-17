<?php
class ModifierGrammarAdvanced extends My_Controller {

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
        $params = $_SERVER['QUERY_STRING'];
        $splitURL = explode('=', $params)[1];
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
            $data['get_unit_id'] = $splitURL;
            $this->session->set_userdata('user', $data);
        }

        $dataunit = $this->admingrammar_model->getDataGrammarAdvancedWithUnitId($splitURL);
        $data['dataunit'] = $dataunit;

        $this->load->view('modifiergrammaradvanced', $data);
    }

    public function checkGrammar(){
        $data = null;
        $data_unit = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
            $data_unit = $getdata['get_unit_id'];
        }
        if (isset($_POST['submit'])){
            //Check validate field data
            $this->form_validation->set_rules('grammar_name', 'Grammar Name', 'trim|required');
            $this->form_validation->set_rules('grammar_details', 'Grammar Details', 'trim|required');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');

            if ($this->form_validation->run() === TRUE){
                $unit_id = $this->unit_model->getNextUnitAdvancedGrammar();
                $grammar_id = $this->admingrammar_model->getNextGrammarId();

                $data = array(
                    'grammar_name' => $_POST['grammar_name'],
                    'grammar_details' => $_POST['grammar_details']
                );
                
                //Modifier data into table TBL_GRAMMAR
                $this->db->trans_begin();
                $this->db->where('level_id', '3');
                $this->db->where('unit_id', $data_unit);
                $this->db->update('tbl_grammar', $data);
                if ($this->db->trans_status() === false){
                    $this->db->trans_rollback();
                } else{
                    $this->db->trans_commit();
                }

                //Redirect to Admin Grammar Page
                redirect('admingrammar/advanced', 'refresh');
            }
            else{
                $this->load->view('modifiergrammaradvanced', $data);
            }
        }
    }
}