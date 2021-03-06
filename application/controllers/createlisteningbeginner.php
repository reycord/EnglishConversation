<?php
class CreateListeningBeginner extends My_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('unit_model');
        $this->load->model('adminlistening_model');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
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
        $this->load->view('createlisteningbeginner', $data);
    }

    public function checkListening(){
        $data = null;
        if($this->session->userdata('user')) {
            $getdata = $this->session->userdata('user');
            $data['user_name'] = $getdata['user_name'];
            $data['email'] = $getdata['email'];
            $data['admin_flag'] = $getdata['admin_flag'];
        }
        if (isset($_POST['submit'])){
            $file = $_FILES['mp3_file']['name'];
            //Check validate field data
            if(empty($file)){
                $this->form_validation->set_rules('mp3_file', 'File MP3', 'required');
            }
            $this->form_validation->set_rules('listening_name', 'Listening Name', 'trim|required');
            $this->form_validation->set_rules('listening_details', 'Listening Details', 'trim|required');
            $this->form_validation->set_error_delimiters('<p style="color:#d42a38">', '</p>');
            if ($this->form_validation->run() === TRUE){
                $config['upload_path'] = './vendors/assets/media/beginner/';

                $config['allowed_types'] = '*';
                $config['overwrite'] = TRUE;
                $config['max_size'] = '8192';
        
                $this->upload->initialize($config);
        
                if (!$this->upload->do_upload('mp3_file')){
                    $data['error'] = $this->upload->display_errors();
                    $data['err_message'] =  $data['error'];
                    $this->load->view('adminlistening', $data);
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $unit_id = $this->unit_model->getNextUnitBeginnerListening();
                    $mp3_file = 'vendors/assets/media/beginner/' . $file;
    
                    $listening_id = $this->adminlistening_model->getNextListeningId();
    
                    $data = array(
                        'listening_id' => $listening_id,
                        'level_id' => '1',
                        'listening_name' => $_POST['listening_name'],
                        'listening_details' => $_POST['listening_details'],
                        'link_media' => $mp3_file,
                        'unit_id' => $unit_id,
                        'del_fg' => '0'
                    );
                    
                    //Add data into table TBL_LISTENING
                    $this->db->insert('tbl_listening', $data);
    
                    //Redirect to Admin Listening Page
                    redirect('adminlistening/beginner', 'refresh');
                }
            }
            else{
                $this->load->view('createlisteningbeginner', $data);
            }
        }
    }
}