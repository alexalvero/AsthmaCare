<?php   
    class Doctors extends CI_Controller{
        public function index(){

            $this->load->model('User_model');
            $username = $this->session->userdata('username');
            $data['patients'] = $this->user_model->get_patients($username);
            $data['username'] = $this->session->userdata('username');
            
           
            


            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/index', $data);
            $this->load->view('templates/doctors/footer-doctor');
        }//end index

        public function view($page = 'index'){

            if(!file_exists(APPPATH.'views/doctors/'.$page.'.php')){
                show_404();
            }//end IF
            
            $this->load->model('User_model');
            $username = $this->session->userdata('username');
            $data['patients'] = $this->user_model->get_patients($username);
            $data['username'] = $this->session->userdata('username');
            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/'.$page , $data);
            $this->load->view('templates/doctors/footer-doctor');
    
        }//end function view
        
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
            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/add', $data);
            $this->load->view('templates/doctors/footer-doctor');
             } //end if
             else{
                $this->load->library('phpmailer_lib');

                $mail = $this->phpmailer_lib->load();
                
                $firstname = $this->input->post('firstname');
                $lastname = $this->input->post('lastname');
                $username = $this->input->post('username');
                
                
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
                $mail->addAddress($this->input->post('email'));
        
                //Email Subject
                $mail->Subject = 'Welcome to Asthma Care!';
        
                //Setting Email format to HTML
                $mail->isHTML(true);
        
                $mailContent="<h1 class='uppercase'>Good Day $firstname $lastname!</h1>
                        <h4> Welcome to Asthma Care $username! </h4>
    
                        <h6>You may now Login to Your Account using your Credentials!</h6>
                ";
        
                $mail->Body = $mailContent;
        
                if(!$mail->send()){
                    echo "Mailer Error ". $mail->ErrorInfo;
                }
                else{
                    echo "Message Sent";
                }
                $this->user_model->create_patient();
                redirect(base_url().doctors);
                
             }//end else
            }//end add
        public function update(){
            $this->user_model->update_user();
            redirect(base_url().doctors);
        }//end update

        public function createschedule(){
            $username = $this->session->userdata('username');
            $data['patients'] = $this->user_model->get_patients($username);
            $data['username'] = $this->session->userdata('username');
            
            

            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/createSchedule', $data);
            $this->load->view('templates/doctors/footer-doctor');
        }
        
        public function addsched(){
            $this->load->library('phpmailer_lib');

            $mail = $this->phpmailer_lib->load();
            
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $remarks = $this->input->post('remarks');
            $date = $this->input->post('date');
            
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
            $mail->addAddress($this->input->post('email'));
    
            //Email Subject
            $mail->Subject = 'do-not-reply Schedule Notification';
    
            //Setting Email format to HTML
            $mail->isHTML(true);
    
            $mailContent="<h1 class='uppercase'>Good Day $firstname $lastname!</h1>
                    <p> Your Doctor Scheduled a Follow-up Check-up:</p>
                    <h5> Scheduled Date: $date</h5>
                    <h5>Remarks:</h5>
                    <p>$remarks<p>


                    <p> Please Login for Confirmation of Schedule.</p>
            ";
    
            $mail->Body = $mailContent;
    
            if(!$mail->send()){
                echo "Mailer Error ". $mail->ErrorInfo;
            }
            else{
                echo "Message Sent";
            }
            $this->schedule_model->create();
            redirect(base_url()."doctors/schedule");
        }

        public function schedule(){
            $username = $this->session->userdata('username');
            $selected = $this->input->post('username');
            
            $data['username'] = $this->session->userdata('username');
            $data['patients'] = $this->user_model->get_patients($username);
            $data['sched'] = $this->schedule_model->get_schedule($username);
            
            

            
            
            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/schedule', $data);
            $this->load->view('templates/doctors/footer-doctor');
        }


        public function createAP(){
            

            $username = $this->session->userdata('username');
            $data['username'] = $this->session->userdata('username');
            $data['patients'] = $this->user_model->get_patients($username); 
            $data['doctorinfo'] = $this->user_model->get_doctorinfo($username);



            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/createAP', $data);
            $this->load->view('templates/doctors/footer-doctor');
        }

        public function addAP(){
            $this->load->library('phpmailer_lib');

            $mail = $this->phpmailer_lib->load();
            
            $name = $this->input->post('namepatient');
            $doctorname = $this->input->post('namedoctor');
            $date = $this->input->post('date');
            
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
            $mail->addAddress($this->input->post('email'));
    
            //Email Subject
            $mail->Subject = 'do-not-reply Action Plan Notification';
    
            //Setting Email format to HTML
            $mail->isHTML(true);
    
            $mailContent="<h1 class='uppercase'>Good Day $name!</h1>
                    <h4> Your Doctor $doctorname created a New Action Plan for you!</h4>
                    <h5> Date Created: $date</h5>
                    


                    <p> Please Login to see the Action Plan.</p>
            ";
    
            $mail->Body = $mailContent;
    
            if(!$mail->send()){
                echo "Mailer Error ". $mail->ErrorInfo;
            }
            else{
                echo "Message Sent";
            }
            




            $this->action_model->create_AP();
            redirect(base_url()."doctors/viewAP");
        }

        public function viewAP(){
            
            $username = $this->session->userdata('username');
            $data['action'] = $this->action_model->viewAP_doctor($username); 

            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/viewAP', $data);
            $this->load->view('templates/doctors/footer-doctor');
        }

        public function actionplan(){
            $username = $this->session->userdata('username');
            $data['action'] = $this->action_model->viewAP_doctor($username); 
            if($this->uri->segment(3)){
                
                $action_id = $this->uri->segment(3);
                $data['actionid'] = $this->action_model->fetch_single_actionplan($action_id);

                $this->load->view('doctors/viewAP', $data);
            }

        }

        public function archiveAP(){

            $this->action_model->archiveAP();
            redirect(base_url()."doctors/viewAP");
        }

        public function history(){

            $username = $this->session->userdata('username');
            $data['action'] = $this->action_model->history($username);     

            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/history', $data);
            $this->load->view('templates/doctors/footer-doctor');
        }

        public function print(){

            $id = $this->input->post('id');
            $action = $this->action_model->print($id);
            $data['action'] = $this->action_model->print($id);

            // print_r($action);
            $this->load->view('doctors/print' , $data);
            $this->load->view('templates/doctors/footer-doctor');
        }

        public function feedback(){

            $username = $this->session->userdata('username');
            $data['feed'] = $this->feedback_model->getfeedback($username);


            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/feedback', $data);
            $this->load->view('templates/doctors/footer-doctor');

        }

        public function account(){

            $username = $this->session->userdata('username');
            $data['username'] = $this->session->userdata('username');
            $data['info'] = $this->user_model->get_doctorinfo($username);

            $this->load->view('templates/doctors/header-doctor');
            $this->load->view('doctors/account', $data);
            $this->load->view('templates/doctors/footer-doctor');

        }
        public function updatepassword(){
            
            $username = $this->input->post('username');
            $this->user_model->updatepassword($username);
            redirect(base_url()."doctors/account");
        }
    }