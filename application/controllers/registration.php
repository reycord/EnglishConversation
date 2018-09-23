<?php
class Registration extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('registration_model');
    }

    public function index()
    {
        $this->load->view('registration');
    }

    public function checkRegistration(){
        if (isset($_POST['signin'])){
            //Check validate field data
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('username', 'User Name', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[25]|callback_chk_password_expression');
            $this->form_validation->set_rules('repeat-password', 'Repeat Password', 'trim|required|min_length[6]|max_length[25]|matches[password]|callback_chk_password_expression');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');
            $data = array(
                'err_message' => '',
            );

            if ($this->form_validation->run() === TRUE){
                $email = $this->input->post('email');
                $result = $this->compareInfo($email);
                if ($result) {
                    $user_id = $this->registration_model->getMaxUserId();
                    $data = array(
                        'user_id' => $user_id + 1,
                        'user_name' => $_POST['username'],
                        'email' => $_POST['email'],
                        'password' => md5($_POST['password']),
                        'score_vocabulary_beginner' => 0,
                        'score_vocabulary_intermediate' => 0,
                        'score_vocabulary_advanced' => 0,
                        'score_listening_beginner' => 0,
                        'score_listening_intermediate' => 0,
                        'score_listening_advanced' => 0,
                        'score_grammar_beginner' => 0,
                        'score_grammar_intermediate' => 0,
                        'score_grammar_advanced' => 0,
                        'admin_flag' => '0',
                        'del_fg' => '0'
                    );
                    
                    //Add data into table M_USER
                    $this->db->insert('m_user', $data);

                    //Redirect to Login Page
                    redirect('authenticate', 'refresh');
                }else{
                    $data['err_message'] = "Email was existed! Please input different email!";
                    $this->load->view('registration', $data);
                }
            }
            else{
                $this->load->view('registration', $data);
            }
        }
    }

    public function chk_password_expression($str){
        if (1 !== preg_match("/^.*(?=.{6,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $str))
        {
            $this->form_validation->set_message('chk_password_expression', '%s must be at least 6 characters and must contain at least one lower case letter, one upper case letter and one digit');
            return false;
        }
        else
        {
            return true;
        }
    } 

    private function compareInfo($email)
    {
        $user = $this->registration_model->checkEmail($email);
        if ($user === null) {
            return true;
        }
        return false;
    }
}