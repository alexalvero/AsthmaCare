<?php

    class Feedback_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function addfeed(){

            $data = array(

                'subject' => $this->input->post('subject'),
                'body' => $this->input->post('body'),
                'created_by' => $this->input->post('created_by'),
                'created_for' => $this->input->post('created_for'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
            ); 
            
            return $this->db->insert('feedback', $data);
        }

        public function getfeedback($username){

            $query = $this->db->get_where('feedback', array('created_for' => $username ) );

            return $query->result_array();
        }
    }