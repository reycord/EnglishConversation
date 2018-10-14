<?php
class CreateVocabularyBeginner extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('unit_model');
        $this->load->model('adminvocabulary_model');
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
        $this->load->view('createvocabularybeginner', $data);
    }

    public function checkVocabulary(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }
        if (isset($_POST['submit'])){
            for ($a = 1; $a <= 12; $a++){
                if( (($_POST['vocabulary_name_'.$a] == "") && ($_POST['vocabulary_mean_'.$a] == "")) == FALSE){
                    //Check validate field data
                    $this->form_validation->set_rules('vocabulary_name_'.$a, 'Vocabulary Name '.$a, 'trim|required');
                    $this->form_validation->set_rules('vocabulary_mean_'.$a, 'Vocabulary Mean '.$a, 'trim|required');
                }
            }
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');
            if ($this->form_validation->run()){
                $unit_id = $this->unit_model->getNextUnitBeginnerVocabulary();
                $learn_vocabulary_id = $this->adminvocabulary_model->getMaxLearnVocabularyId();

                for ($i = 1; $i <= 12; $i++){
                    $data = array(
                        'learn_vocabulary_id' => $learn_vocabulary_id + $i,
                        'level_id' => $_POST['level'],
                        'vocabulary_name' => ucfirst($_POST['vocabulary_name_' . $i]),
                        'vocabulary_mean' => ucfirst($_POST['vocabulary_mean_' . $i]),
                        'unit_id' => $unit_id,
                        'screen_id' => $i,
                        'del_fg' => '0'
                    );
                    if( (($_POST['vocabulary_name_'.$i] == "") && ($_POST['vocabulary_mean_'.$i] == "")) == FALSE){
                    //Add data into table TBL_LEARN_VOCABULAR
                    $this->db->insert('tbl_learn_vocabulary', $data);}
                }
                //Redirect to Admin Vocabulary Page
                redirect('createvocabularybeginner', 'refresh');         
        }else{
                $this->load->view('createvocabularybeginner', $data);
            }
        }
    }
}