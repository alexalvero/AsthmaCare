<?php
    class Pages_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }//end construct

        public function get_about(){
           $db = $this->db->get_where('pages', array('title' => 'homeabout'));
           return $db->result_array();

        }

        public function get_fullabout(){
            $db = $this->db->get_where('pages', array('title' => 'about'));
            return $db->result_array();
        }
    }