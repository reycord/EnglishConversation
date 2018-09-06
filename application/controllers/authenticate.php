<?php
class Authenticate extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('authenticate_model');
    }

    public function index()
    {
        $this->load->view('authenticate');
    }

    public function checkLogin(){
        if (isset($_POST['signin'])){
            //Check validate field data
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[25]|callback_chk_password_expression');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');
            $data = array(
                'err_message' => '',
            );
            if ($this->form_validation->run() === TRUE){
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $result = $this->compareInfo($email, $password);
                if ($result) {
                    //Redirect to Home Page
                    redirect('index', 'refresh');
                }else{
                    $data['err_message'] = "Username or password is invalid!";
                    $this->load->view('authenticate', $data);
                }
            }
            else{
                $this->load->view('authenticate', $data);
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

    private function compareInfo($email, $password)
    {
        $user = $this->authenticate_model->checkLogin($email, $password);
        if ($user === null) {
            return false;
        }
        
        $this->session->set_userdata('user', $user);
        return true;
    }

    public function signout()
    {
        $user = $this->session->userdata('user');
        if (isset($user)) {
            $this->session->unset_userdata('user');
            // $this->session->sess_destroy();
        }
        redirect('/signin');
    }
}