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
                'greenmedicine' => $this->input->post('greenmedicine'),
                'greenmuch' => $this->input->post('greenmuch'),
                'greenwhen' => $this->input->post('greenwhen'),
                'yellowmedicine' => $this->input->post('yellowmedicine'),
                'yellowmuch' => $this->input->post('yellowmuch'),
                'yellowwhen' => $this->input->post('yellowwhen'),
                'redmedicine' => $this->input->post('redmedicine'),
                'redmuch' => $this->input->post('redmuch'),
                'redwhen' => $this->input->post('redwhen'),
                'created_by' => $this->input->post('created_by'),
                'created_for' => $this->input->post('created_for'),
                'version' => $this->input->post('version'),
                'doctorsignature' => $this->input->post('doctorsignature')

            );
            return $this->db->insert('actionplan', $data);
        }

        public function viewAP_doctor($username){
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
    }