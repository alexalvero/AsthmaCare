<?php

    class Action_model extends CI_model{
        public function __constrcut(){
            $this->load->database();
        }

        public function create_AP(){

            $data = array(
                'date' => $this->input->post('date'),
                'namepatient' => $this->input->post('namepatient'),
                'namedoctor' => $this->input->post('namedoctor'),
                'bestpeak' => $this->input->post('bestpeak'),
                'highgreen' => $this->input->post('highgreen'),
                'lowgreen' => $this->input->post('lowgreen'),
                'highyellow' => $this->input->post('highyellow'),
                'lowyellow' => $this->input->post('lowyellow'),
                'highred' => $this->input->post('highred'),
                'lowred' => $this->input->post('lowred'),
                'greenmedicine1' => $this->input->post('greenmedicine1'),
                'greenmuch1' => $this->input->post('greenmuch1'),
                'greenwhen1' => $this->input->post('greenwhen1'),
                'greenmedicine2' => $this->input->post('greenmedicine2'),
                'greenmuch2' => $this->input->post('greenmuch2'),
                'greenwhen2' => $this->input->post('greenwhen2'),
                'greenmedicine3' => $this->input->post('greenmedicine3'),
                'greenmuch3' => $this->input->post('greenmuch3'),
                'greenwhen3' => $this->input->post('greenwhen3'),
                'greenmedicine4' => $this->input->post('greenmedicine4'),
                'greenmuch4' => $this->input->post('greenmuch4'),
                'greenwhen4' => $this->input->post('greenwhen4'),
                'yellowmedicine1' => $this->input->post('yellowmedicine1'),
                'yellowmuch1' => $this->input->post('yellowmuch1'),
                'yellowwhen1' => $this->input->post('yellowwhen1'),
                'yellowmedicine2' => $this->input->post('yellowmedicine2'),
                'yellowmuch2' => $this->input->post('yellowmuch2'),
                'yellowwhen2' => $this->input->post('yellowwhen2'),
                'yellowmedicine3' => $this->input->post('yellowmedicine3'),
                'yellowmuch3' => $this->input->post('yellowmuch3'),
                'yellowwhen3' => $this->input->post('yellowwhen3'),
                'yellowmedicine4' => $this->input->post('yellowmedicine4'),
                'yellowmuch4' => $this->input->post('yellowmuch4'),
                'yellowwhen4' => $this->input->post('yellowwhen4'),
                'redmedicine1' => $this->input->post('redmedicine1'),
                'redmuch1' => $this->input->post('redmuch1'),
                'redwhen1' => $this->input->post('redwhen1'),
                'redmedicine2' => $this->input->post('redmedicine2'),
                'redmuch2' => $this->input->post('redmuch2'),
                'redwhen2' => $this->input->post('redwhen2'),
                'redmedicine3' => $this->input->post('redmedicine3'),
                'redmuch3' => $this->input->post('redmuch3'),
                'redwhen3' => $this->input->post('redwhen3'),
                'redmedicine4' => $this->input->post('redmedicine4'),
                'redmuch4' => $this->input->post('redmuch4'),
                'redwhen4' => $this->input->post('redwhen4'),
                'created_by' => $this->input->post('created_by'),
                'created_for' => $this->input->post('created_for'),
                'version' => $this->input->post('version'),
                

            );
           
            return $this->db->insert('actionplan', $data);
        }

        public function viewAP_doctor($username){
          $query = $this->db->get_where('actionplan' , array('created_by' => $username, "version" => 'latest') );
          
            return $query->result_array();
        }
        public function history($username){
            
            $query = $this->db->get_where('actionplan' , array('created_by' => $username) );
            
              return $query->result_array();
          }

        public function fetch_single_actionplan($action_id){
            
            $this->db->where('id', $action_id);
            $data = $this->db->get('actionplan');
            $output = '<table width="100%" cellspacing="5" cellpadding="5">';
                foreach($data->result() as $row){

                    $output .= '
                    <tr class="text-warning">
                        <td>Patient Name : </b>'.$row->namepatient.' </td>
                    </tr>
                    ';
                }
            $output .= '</table>';    
            return $output;
        }

        public function archiveAP(){
            
            $action_id = $this->input->post('id');
            
            
            $data = array(
                "version" => $this->input->post('status'),
            );
            $this->db->where('id', $this->input->post('id') );
            return $this->db->update('actionplan', $data);
        }

        public function print($id){

            $query = $this->db->get_where('actionplan' , array('id' => $id) );
            return $query->result_array();
        }

        public function viewAP_patient($username){
            $query = $this->db->get_where('actionplan' , array('created_for' => $username, "version" => 'latest') );
            
              return $query->result_array();
          }
    }