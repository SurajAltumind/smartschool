<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Applyforcertificates_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
        $this->current_session_name = $this->setting_model->getCurrentSessionName();
        $this->start_month = $this->setting_model->getStartMonth();
    }




    function add($call) {
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->insert('applyfor_certificates', $call);
		$id=$this->db->insert_id();
        $message      = INSERT_RECORD_CONSTANT." On  applyfor_certificates id ".$id;
        $action       = "Insert";
        $record_id    = $id;
        $this->log($message, $record_id, $action);
		//echo $this->db->last_query();die;
        //======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /*Optional*/
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
        //return $return_value;
        }
    }

    public function applicants_list($id = null) {
        $this->db->select()->from('applyfor_certificates');
        if ($id != null) {
            $this->db->where('applyfor_certificates.id', $id);
        } else {
            $this->db->order_by('applyfor_certificates.id');
        }
        $query = $this->db->get();
        if ($id != null) {
            return $query->row_array();
        } else {
            return $query->result_array();
        }
    }

    function get_certificate_type() {
        
        $query = $this->db->query('SELECT `certificate_name` FROM `certificates`');
        return $query->result_array();
    }

    function delete($id) {
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->delete('applyfor_certificates');  
		$message      = DELETE_RECORD_CONSTANT." applyfor_certificates ".$id;
        $action       = "Delete";
        $record_id    = $id;
        $this->log($message, $record_id, $action);
		//======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /*Optional*/
        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;
        } else {
        //return $return_value;
        }
    }

    public function call_update($id, $data) {
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(false); # See Note 01. If you wish can remove as well
        //=======================Code Start===========================
        $this->db->where('id', $id);
        $this->db->update('applyfor_certificates', $data);
		$message      = UPDATE_RECORD_CONSTANT." applyfor_certificates ".$id;
        $action       = "Update";
        $record_id    = $id;
        $this->log($message, $record_id, $action);
		//======================Code End==============================
        $this->db->trans_complete(); # Completing transaction
        /*Optional*/

        if ($this->db->trans_status() === false) {
            # Something went wrong.
            $this->db->trans_rollback();
            return false;

        } else {
        //return $return_value;
        }
    }

}
