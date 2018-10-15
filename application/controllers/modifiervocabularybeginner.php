<?php
class ModifierVocabularyBeginner extends My_Controller {

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

        $dataunit = $this->adminvocabulary_model->getDataVocabularyWithUnitId($splitURL);
        $data['dataunit'] = $dataunit;

        $this->load->view('modifiervocabularybeginner', $data);
    }

    public function checkVocabulary(){
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
            for ($a = 1; $a <= 12; $a++){
                if( (($_POST['vocabulary_name_'.$a] == "") && ($_POST['vocabulary_mean_'.$a] == "")) == FALSE){
                    //Check validate field data
                    $this->form_validation->set_rules('vocabulary_name_'.$a, 'Vocabulary Name '.$a, 'trim|required');
                    $this->form_validation->set_rules('vocabulary_mean_'.$a, 'Vocabulary Mean '.$a, 'trim|required');
                }
            }
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');
            if ($this->form_validation->run()){
                for ($i = 1; $i <= 12; $i++){
                    $vocabulary_name = ucfirst($_POST['vocabulary_name_' . $i]);
                    $vocabulary_mean = ucfirst($_POST['vocabulary_mean_' . $i]);

                    $data = array (
                        'vocabulary_name' => $vocabulary_name,
                        'vocabulary_mean' => $vocabulary_mean
                    );

                    if( (($_POST['vocabulary_name_'.$i] == "") && ($_POST['vocabulary_mean_'.$i] == "")) == FALSE){
                        //update data TBL_LEARN_VOCABULAR
                        $this->db->trans_begin();
                        $this->db->where('level_id', '1');
                        $this->db->where('unit_id', $data_unit);
                        $this->db->where('screen_id', $i);
                        $this->db->update('tbl_learn_vocabulary', $data);
                        if ($this->db->trans_status() === false){
                            $this->db->trans_rollback();
                        } else{
                            $this->db->trans_commit();
                        }
                    }
                }
                //Redirect to Admin Vocabulary Page
                redirect('adminvocabulary/beginner', 'refresh');         
        }else{
                $this->load->view('modifiervocabularybeginner', $data);
            }
        }
    }
}