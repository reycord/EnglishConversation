<?php
class Authenticate extends My_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        if (isset($_POST['signin'])){

            if ($this->form_validation->run() == TRUE){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $del_fg = '0';

                //Check user in database
                $this->db->select('user_name, email, admin_flag');
                $this->db->from("m_user");
                $this->db->where(array("email" => $email, "password" => $password, "del_fg" => $del_fg));

                $query = $this->db->get();

                $user = $query->row();

                $count = $query->result();
                //If user exists
                if (count($count) > 0){
                    //Set session variables
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['user_name'] = $user->user_name;
                    $_SESSION['admin_flag'] = $user->admin_flag;
                    
                    $this->session->set_flashdata('success','');
                    //Redirect to Home Page
                    redirect('index', 'refresh');
                }
                else{
                    $data = array('isSuccess'=>false);
                    $this->load->view('authenticate',  $data);
                    $_SESSION['user_logged'] = FALSE;
                    $this->session->set_flashdata('error', 'No such account exists in database!');
                }
            }
        }

        $this->load->view('authenticate');
    }
}