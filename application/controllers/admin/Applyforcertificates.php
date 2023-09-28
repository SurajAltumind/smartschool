<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Applyforcertificates extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("Applyforcertificates_model");
        
    }


    public function index() {
        //if (!$this->rbac->hasPrivilege('applyforcertificates', 'can_view')) {
           // access_denied();
       // }


        $this->session->set_userdata('top_menu', 'front_office');
        $this->session->set_userdata('sub_menu', 'admin/applyforcertificates');

        $this->form_validation->set_rules('certificate_type',$this->lang->line('certificate_type'), 'required');
       
        $this->form_validation->set_rules('contact', $this->lang->line('contact'), 'required');
        $this->form_validation->set_rules('date', $this->lang->line('date'), 'required');
        $data['certificates'] = $this->Applyforcertificates_model->get_certificate_type();
    
        if ($this->form_validation->run() == FALSE) {
            $data['certificatelist'] = $this->Applyforcertificates_model->applicants_list();
            // $data['Call_data'] = $this->Applyforcertificates_model->applicants_list($id);
            // var_dump($data);
            $this->load->view('layout/header');
            $this->load->view('admin/frontoffice/applyforcertificates', $data);
            $this->load->view('layout/footer');
        } else { 
            $call = array(
                'name' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('date'))),
                'description' => $this->input->post('description'),
                'follow_up_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('follow_up_date'))),
                'approved_by' => $this->input->post('approved_by'),
                'status' => $this->input->post('status'),
                'note' => $this->input->post('note'),
                'certificate_type' => $this->input->post('certificate_type')
            );
            if($_POST['follow_up_date']!=''){
                $call['follow_up_date']=date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('follow_up_date')));
            }
            

          
            $this->Applyforcertificates_model->add($call);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">'.$this->lang->line('success_message').'</div>');
            redirect('admin/applyforcertificates');
        }
    }


    function edit($id) {
        if (!$this->rbac->hasPrivilege('applyforcertificates', 'can_edit')) {
            access_denied();
        }
  
        $this->form_validation->set_rules('certificate_type',$this->lang->line('certificate_type'), 'required');
        
        $this->form_validation->set_rules('contact', $this->lang->line('contact'), 'required');
        $this->form_validation->set_rules('date', $this->lang->line('date'), 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['certificates'] = $this->Applyforcertificates_model->get_certificate_type();
            $data['CallList'] = $this->Applyforcertificates_model->applicants_list();
            $data['Call_data'] = $this->Applyforcertificates_model->applicants_list($id);
            $this->load->view('layout/header');
            $this->load->view('admin/frontoffice/applyforcertificatesedit', $data);
            $this->load->view('layout/footer');
        } else {
            $calls_update = array(
                'name' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('date'))),
                'description' => $this->input->post('description'),
                'follow_up_date' => date('Y-m-d', $this->customlib->datetostrtotime($this->input->post('follow_up_date'))),
                // 'call_dureation' => $this->input->post('call_dureation'),
                'note' => $this->input->post('note'),
                'status' => $this->input->post('status'),
                'certificate_type' => $this->input->post('certificate_type')
            );
           
            $this->Applyforcertificates_model->call_update($id, $calls_update);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">'.$this->lang->line('success_message').'</div>');
            redirect('admin/applyforcertificates');
        }
    }

    function details($id) {
        if (!$this->rbac->hasPrivilege('applyforcertificates', 'can_view')) {
            access_denied();
        }
        
        $data['Call_data'] = $this->Applyforcertificates_model->applicants_list($id);
        $this->load->view('admin/frontoffice/applyforcertificatesview', $data);
    }

    function delete($id) {
        if (!$this->rbac->hasPrivilege('applyforcertificates', 'can_delete')) {
            access_denied();
        }
        $this->Applyforcertificates_model->delete($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">'.$this->lang->line('delete_message').'</div>');
        redirect('admin/applyforcertificates');
    }

    public function check_default($post_string) {
        return $post_string == '' ? FALSE : TRUE;
    }

    // function test() {

    //     $perm = $this->rbac->module_permission('student_information');
    //     if ($perm['is_active'] == '1') {
    //         echo "gc_disable()";
    //     }
    // }

}
