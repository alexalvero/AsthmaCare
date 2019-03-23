<?php
    class Schedule_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }//end construct

        public function create(){
           
            $data= array(
                'date' => $this->input->post('date'),
                'remarks' => $this->input->post('remarks'),
                'created_for' => $this->input->post('created_for'),
                'created_by' => $this->input->post('created_by'),
                'status' => $this->input->post('status'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
            );
            $this->db->where('id' , $this->input->post('id'));
            return $this->db->insert('schedule', $data);
        }//end create
        
        public function get_schedule($username){
            $query = $this->db->get_where('schedule', array('created_by' => $username));
            
            return $query->result_array();
        }
        
        public function schedule_user($username){
            $query = $this->db->get_where('schedule', array('created_for' =>$username));
            return $query->result_array();

            if($query->num_rows() > 0){
                
                return true;
            }
            else{
                
                return false;
            }
        }//end schedule_user

        public function find($selected){
           $this->db->where('username' , $selected);
           $query = $this->db->get('users');
           return $query->result_array();
        }
        

        public function accept_schedule(){
           
            $data = array(
                'status' => "<p class='text-success'>Accepted</p>",
            );
            $this->db->where('id' , $this->input->post('id'));
            
            return $this->db->update('schedule', $data);
        }

        public function update_schedule(){
           
            $data = array(
                'date' => $this->input->post('date'),
                'status' => "<p class='text-warning'>Rescheduled</p>",
            );
            $this->db->where('id' , $this->input->post('id'));
            return $this->db->update('schedule', $data);
        }


        public function getinfo(){
            $query= $this->db->query("SELECT users.email,users.firstname,users.lastname from users INNER JOIN schedule on schedule.created_by=users.username");
            
            return $query->result_array();            
            
           
        }

       
    }//end class
 