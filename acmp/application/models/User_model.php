<?php
    class User_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_user(){
            $query = $this->db->get('users');
            return $query->result_array();
        }
        
        function can_login($username, $password){
            
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get('users');
            return $query;
            // if($query->num_rows() > 0){
                
            //     return true;
            // }
            // else{
                
            //     return false;
            // }
        }//can_login end

        public function get_admin(){
            
            $query = $this->db->get_where('users', array('roles' => 'admin'));
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }//end get_admin
        public function get_doctor(){
            
            $query = $this->db->get_where('users', array('roles' => 'doctor'));
           
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }//end get_doctor
        public function get_patients($username){
            
            $query = $this->db->get_where('users', array('created_by' => $username, 'roles' => 'patient', 'status' => 'active' ) );
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }//end get_patiens

        public function get_patients2($username){
            
            $query = $this->db->get_where('users', array('created_by' => $username, 'roles' => 'patient') );
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }//end get_patiens
         
        

        public function create_doctor(){
            
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'birthday' => $this->input->post('birthday'),
                'address' => $this->input->post('address'),
                'phonenumber' => $this->input->post('phonenumber'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'roles' => $this->input->post('roles'),
                'created_by' => $this->input->post('created_by')
            );

            return $this->db->insert('users', $data);
        }//end Create_doctor
        public function create_patient(){
            
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'birthday' => $this->input->post('birthday'),
                'address' => $this->input->post('address'),
                'phonenumber' => $this->input->post('phonenumber'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'roles' => $this->input->post('roles'),
                'created_by' => $this->input->post('created_by'),
                'status' => $this->input->post('status'),
            );

            return $this->db->insert('users', $data);
        }//end Create_patient

        public function update_user(){
            $data = array(
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'birthday' => $this->input->post('birthday'),
                'address' => $this->input->post('address'),
                'phonenumber' => $this->input->post('phonenumber'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'roles' => $this->input->post('roles'),
                'created_by' => $this->input->post('created_by')
            );
            $this->db->where('id' , $this->input->post('id'));
            return $this->db->update('users', $data);
        }

        public function get_doctorinfo($username){
            
            $query = $this->db->get_where('users', array('username' => $username, 'roles' => 'doctor' ) );
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }


        public function get_patientinfo($username){
            
            $query = $this->db->get_where('users', array('username' => $username, 'roles' => 'patient' ) );
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }

        public function updatepassword($username){

            $data = array(
                "password" => $this->input->post('password'),
            );
            $this->db->where('username', $username);
            return $this->db->update('users' , $data);
        }

        public function email_exists($email){
            

        $sql = "SELECT email from users WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        return($result->num_rows() === 1 && $row->email);
        }

        public function forgot($email){
            $query = $this->db->get_where('users', array('email' => $email));
            return $query->result_array();
        }
       
    }//end MODEL