<?php
class ModifyUser extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('modifyuser_model');
    }

    public function index()
    {
        $this->load->view('modifyuser');
    }

    public function checkModify(){
        if (isset($_POST['modify'])){
            //Check validate field data
            $this->form_validation->set_rules('username', 'User Name', 'trim|required');
            $this->form_validation->set_rules('birthday', 'Birthday', 'trim|required|callback_chk_date_expression');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');
            $data = array(
                'err_message' => '',
            );

            if ($this->form_validation->run() === TRUE){
                $getdata = $this->session->userdata('user');
                $email = $getdata['email'];
                $username = $this->input->post('username');
                $birthday = $this->input->post('birthday');
                $phone_number = $this->input->post('phone_number');
                $address = $this->input->post('address');

                $result = $this->compareInfo($email, $username, $birthday, $phone_number, $address);
                if ($result) {
                    //Redirect to Login Page
                    redirect('authenticate', 'refresh');
                }else{
                    $data['err_message'] = "User is not existed database!";
                    $this->load->view('modifyuser', $data);
                }
            }
            else{
                $this->load->view('modifyuser', $data);
            }
        }
    }

    public function chk_date_expression($str){
        if (1 !== preg_match("/([012]?[1-9]|[12]0|3[01])\/(0?[1-9]|1[012])\/([0-9]{4})/", $str))
        {
            $this->form_validation->set_message('chk_date_expression', '%s is format (dd/mm/yyyy)');
            return false;
        }
        else
        {
            return true;
        }
    }

    public function chk_phone_number_expression($str){
        if (1 !== preg_match("/^[0-9]{10|11}$/", $str))
        {
            $this->form_validation->set_message('chk_phone_number_expression', '%s is format 10 or 11 digit number');
            return false;
        }
        else
        {
            return true;
        }
    } 

    private function compareInfo($email, $username, $birthday, $phone_number, $address)
    {
        $user = $this->modifyuser_model->checkUpdate($email, $username, $birthday, $phone_number, $address);
        if ($user === true) {
            return true;
        }
        return false;
    }
}