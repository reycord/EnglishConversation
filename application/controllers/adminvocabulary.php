<?php
class AdminVocabulary extends My_Controller {

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

        $this->load->view('adminvocabulary', $data);
    }

    public function checkVocabulary(){
        $data = null;
        if (isset($_POST['submit'])){
            //Check validate field data
            $this->form_validation->set_rules('vocabulary_name_1', 'Vocabulary Name 1', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_1', 'Vocabulary Mean 1', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_2', 'Vocabulary Name 2', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_2', 'Vocabulary Mean 2', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_3', 'Vocabulary Name 3', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_3', 'Vocabulary Mean 3', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_4', 'Vocabulary Name 4', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_4', 'Vocabulary Mean 4', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_5', 'Vocabulary Name 5', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_5', 'Vocabulary Mean 5', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_6', 'Vocabulary Name 6', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_6', 'Vocabulary Mean 6', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_7', 'Vocabulary Name 7', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_7', 'Vocabulary Mean 7', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_8', 'Vocabulary Name 8', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_8', 'Vocabulary Mean 8', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_9', 'Vocabulary Name 9', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_9', 'Vocabulary Mean 9', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_10', 'Vocabulary Name 10', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_10', 'Vocabulary Mean 10', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_11', 'Vocabulary Name 11', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_11', 'Vocabulary Mean 11', 'trim|required');
            $this->form_validation->set_rules('vocabulary_name_12', 'Vocabulary Name 12', 'trim|required');
            $this->form_validation->set_rules('vocabulary_mean_12', 'Vocabulary Mean 12', 'trim|required');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');

            if ($this->form_validation->run() === TRUE){
                if ($_POST['level'] === '1'){
                    $unit_id = $this->unit_model->getNextUnitBeginnerVocabulary();
                }elseif($_POST['level'] === '2'){
                    $unit_id = $this->unit_model->getNextUnitIntermediateVocabulary();
                }else{
                    $unit_id = $this->unit_model->getNextUnitAdvancedVocabulary();
                }
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
                    
                    //Add data into table TBL_LEARN_VOCABULAR
                    $this->db->insert('tbl_learn_vocabulary', $data);
                }

                //Redirect to Admin Vocabulary Page
                redirect('adminvocabulary', 'refresh');
            }
            else{
                $this->load->view('adminvocabulary', $data);
            }
        }
    }
}