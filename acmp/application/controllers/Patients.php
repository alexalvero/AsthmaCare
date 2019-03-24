<?php
    class Patients extends CI_Controller{
        public function index(){
            $username = $this->session->userdata('username');
            $data['username'] = $this->session->userdata('username');
            $data['schedule'] = $this->schedule_model->schedule_user3($username);
            $data['action'] = $this->action_model->viewAP_patient($username);

            $this->load->view('templates/patients/header-patient');
            $this->load->view('patients/index', $data);
            $this->load->view('templates/patients/footer-patient');
        }

        public function view($page = 'index'){

            if(!file_exists(APPPATH.'views/patients/'.$page.'.php')){
                show_404();
            }//end IF
            
            
            $data['username'] = $this->session->userdata('username');
            $this->load->view('templates/patients/header-patient');
            $this->load->view('patients/'.$page , $data);
            $this->load->view('templates/patients/footer-patient');
    
        }//end function view

        public function schedule(){

            
            $username = $this->session->userdata('username');
            $schedule1 =$this->schedule_model->schedule_user2($username);
            $data['schedule'] = $this->schedule_model->schedule_user($username);
            $data['schedule1'] = $this->schedule_model->schedule_user2($username);
            $data['username'] = $this->session->userdata('username');
            $data['info'] = $this->schedule_model->getinfo();

            
            $this->load->view('templates/patients/header-patient');
            $this->load->view('patients/schedule', $data);
            $this->load->view('templates/patients/footer-patient');
        }

        public function accept_schedule(){
            $this->load->library('phpmailer_lib');

            $mail = $this->phpmailer_lib->load();
           
           $date = $this->input->post('date');
           $firstnamepatient = $this->input->post('fname');
           $lastnamepatient = $this->input->post('lname'); 
           $firstnamedoc = $this->input->post('first');
           $lastnamedoc = $this->input->post('last');
            
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
    
            $mailContent="<h1 class='uppercase'>Good Day Dr. $firstnamedoc $lastnamedoc!</h1>
                    <p> Your Patient($firstnamepatient $lastnamepatient) Confirmed a Follow-Up Schedule:</p>
                    
                    <h5> Scheduled Date: $date</h5>
                    
                    <p> Please Login to check the Schedule.</p>
            ";
    
            $mail->Body = $mailContent;
    
            if(!$mail->send()){
                echo "Mailer Error ". $mail->ErrorInfo;
            }
            else{
                echo "Message Sent";
            }
            $this->schedule_model->accept_schedule();
            redirect(base_url().patients);       

        }

        public function update_schedule(){
            $this->schedule_model->update_schedule();
            redirect(base_url().patients);       

        }

        public function account(){

            $username = $this->session->userdata('username');
            $data['username'] = $this->session->userdata('username');
            $data['info'] = $this->user_model->get_patientinfo($username);

            $this->load->view('templates/patients/header-patient');
            $this->load->view('patients/account', $data);
            $this->load->view('templates/patients/footer-patient');

        }

        public function updatepassword(){
            
            $username = $this->input->post('username');
            $this->user_model->updatepassword($username);
            redirect(base_url()."patients/account");
        }

        public function feedback(){

            $username = $this->session->userdata('username');
            $data['username'] = $this->session->userdata('username');
            $data['info'] = $this->user_model->get_patientinfo($username);


            $this->load->view('templates/patients/header-patient');
            $this->load->view('patients/feedback', $data);
            $this->load->view('templates/patients/footer-patient');

        }

        public function addfeed(){

            $this->feedback_model->addfeed();
            redirect(base_url()."patients");
        }
    }