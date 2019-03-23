<?php
    class Pages extends CI_Controller{
        
        public function view($page = 'home'){

            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }//end IF
            $this->load->model('User_model');
            $this->load->model('Pages_model');
            
            $data['users'] = $this->user_model->get_doctor();
         
            $data['about'] = $this->pages_model->get_about();
            $data['about1'] = $this->pages_model->get_fullabout();
        
           
            $this->load->view('templates/pages/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/pages/footer');

            // print_r($data);
            
        }//end Function
        
        function login(){
           $this->load->view('templates/pages/header');
           $this->load->view('pages/login');
           $this->load->view('templates/pages/footer');
        }
        
        function login_validation(){
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
                if($this->form_validation->run()){

                    $username = $this->input->post('username');
                    $password = $this->input->post('password');

                    // $this->load->model('User_model');
                    // if($this->user_model->can_login($username, $password)){

                    //     $session_data = array(
                    //         'username' => $username
                    //     );
                    //     $this->session->set_userdata($session_data);
                    //     redirect(base_url().'pages/enter');
                    // }//if end
                    // else{
                    //     $this->session->set_flashdata('error','Invalid Username and/or Password');
                    //     redirect(base_url().'pages/login');
                    // }//else end
                    $this->load->model('User_model');
                    $result = $this->user_model->can_login($username, $password);
                    if($result->num_rows() > 0){
                        $data = $result->row_array();
                        $username = $data['username'];
                        $password = $data['password'];
                        $roles = $data['roles'];
                        $session_data = array(
                            'username' => $username,
                            'password' => $paswword,
                            'roles' => $roles
                        );
                        $this->session->set_userdata($session_data); 
                        if($roles === 'admin'){
                            redirect(base_url().admins);
                        }elseif($roles === 'doctor'){
                            redirect(base_url().doctors);
                        }elseif($roles === 'patient') {
                            redirect(base_url().patients);
                        }         
                    }//if end
                    else{
                        $this->session->set_flashdata('error','<p class="text-danger">Invalid Username and/or Password</p>');
                        redirect(base_url().'pages/login');

                    }
                }//if end
                else{
                    $this->login();
                }//else end
                
        }//end login_validation

        // function enter(){
        //     $this->load->model('User_model');

        // if($this->session->userdata('username') != ''){
        //     redirect(base_url().'admins');
        //  }//end if
        //  else{
        //     redirect(base_url().'pages/login');
        //  }//end else
        // }//end enter
        
        function logout(){
            
            redirect(base_url().'login');
        }
    }//end Class
  