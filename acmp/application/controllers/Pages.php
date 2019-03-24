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


        public function forgotpass(){





            $this->load->view('templates/pages/header');
            $this->load->view('pages/forgotpass', $data);
            $this->load->view('templates/pages/footer');

        }

        public function sendpassword(){
            $email = $this->input->post('email');

           $result = $this->user_model->forgot($email);

            

            $this->load->library('phpmailer_lib');

                $mail = $this->phpmailer_lib->load();
                
                
                
                
                // SMTP Configuration
        
                $mail->IsSMTP();
                $mail->Host = 'ssl://smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'acmp.ust@gmail.com';
                $mail->Password = 'admin@acmp';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 465;
        
                $mail->setFrom('acmp.ust@gmail.com', 'Asthma Care');
                $mail->addReplyto('acmp.ust@gmail.com', "Asthma Care");
                
                //Email Recipient
                $mail->addAddress($email);
        
                //Email Subject
                $mail->Subject = '<do-not-reply> Password Recovery';
        
                //Setting Email format to HTML
                $mail->isHTML(true);

                foreach($result as $row):

                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $username = $row['username'];
                    $password = $row['password'];

                $mailContent="<h1 class='uppercase'>Good Day $firstname $lastname!</h1>
                        <h4> Password Recovery </h4>
                            <h5>Your Username is : $username</h5>
                            <h5>Your Username is : $password</h5>
                        <h6>You may now Login to Your Account using your Credentials!</h6>
                ";
                endforeach;
        
                $mail->Body = $mailContent;
        
                if(!$mail->send()){
                    echo "Mailer Error ". $mail->ErrorInfo;
                }
                else{
                    echo "Message Sent";
                }
            redirect(base_url()."login");
        }
    }//end Class
  