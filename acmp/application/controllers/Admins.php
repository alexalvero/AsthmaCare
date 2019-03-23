<?php   
   class Admins extends CI_Controller{
    public function index(){

        $this->load->model('User_model');

        $data['doctors'] = $this->user_model->get_doctor();

        $this->load->view('templates/admins/head-admin');
        $this->load->view('admins/index', $data);
        $this->load->view('templates/admins/footer-admin');

        
    }//end index Function

    public function add(){

        $data['username'] = $this->session->userdata('username');
        
        
        
        $this->form_validation->set_rules('firstname' , 'Firstname', 'required');
        $this->form_validation->set_rules('lastname' , 'Lastname', 'required');
        $this->form_validation->set_rules('birthday' , 'Birthday', 'required');
        $this->form_validation->set_rules('address' , 'Address', 'required');
        $this->form_validation->set_rules('phonenumber' , 'Phonenumber', 'required');
        $this->form_validation->set_rules('email' , 'Email', 'required');
        $this->form_validation->set_rules('username' , 'Username', 'required');
        $this->form_validation->set_rules('password' , 'Password', 'required');

        if($this->form_validation->run() === FALSE){   
        $this->load->view('templates/admins/head-admin');
        $this->load->view('admins/add', $data);
        $this->load->view('templates/admins/footer-admin');
         } //end if
         else{
            $this->user_model->create_doctor();
            redirect(base_url().admins);
            
         }//end else
    }//end add

    public function view($page = 'index'){

        if(!file_exists(APPPATH.'views/admins/'.$page.'.php')){
            show_404();
        }//end IF

        $this->load->model('User_model');

        $data['doctors'] = $this->user_model->get_doctor();
        $this->load->view('templates/admins/head-admin');
        $this->load->view('admins/'.$page, $data);
        $this->load->view('templates/admins/footer-admin');

    }//end View FUnction

    public function update(){
        $this->user_model->update_user();
        redirect(base_url().admins);
    }
    
    
}//end controller