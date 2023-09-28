<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 *
 */
class Generatecertificate extends Admin_Controller
{

    public $sch_setting_detail = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Customlib');
        $this->config->load('app-config');
        $this->load->library('smsgateway');
        $this->load->library('mailsmsconf');
        $this->load->library('encoding_lib');
        $this->load->library('m_pdf');
        $this->load->model("classteacher_model");
        $this->load->model("timeline_model");
        $this->blood_group        = $this->config->item('bloodgroup');
        $this->sch_setting_detail = $this->setting_model->getSetting();
        $this->role;
    }

    // public function __construct()
    // {
    //     parent::__construct();

    //     $this->load->library('Customlib');
    // }

    public function index()
    {
        if (!$this->rbac->hasPrivilege('generate_certificate', 'can_view')) {
            access_denied();
        }
        $this->session->set_userdata('top_menu', 'Certificate');
        $this->session->set_userdata('sub_menu', 'admin/generatecertificate');

        $certificateList         = $this->Certificate_model->getstudentcertificate();
        $data['certificateList'] = $certificateList;
        $class                   = $this->class_model->get();
        $data['classlist']       = $class;
        $this->load->view('layout/header', $data);
        $this->load->view('admin/certificate/generatecertificate', $data);
        $this->load->view('layout/footer', $data);
    }

    public function search()
    {
        $this->session->set_userdata('top_menu', 'Certificate');
        $this->session->set_userdata('sub_menu', 'admin/generatecertificate');

        $class                   = $this->class_model->get();
        $data['classlist']       = $class;
        $certificateList         = $this->Certificate_model->getstudentcertificate();
        $data['certificateList'] = $certificateList;
        $button                  = $this->input->post('search');
        if ($this->input->server('REQUEST_METHOD') == "GET") {
            $this->load->view('layout/header', $data);
            $this->load->view('admin/certificate/generatecertificate', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $class       = $this->input->post('class_id');
            $section     = $this->input->post('section_id');
            $search      = $this->input->post('search');
            $certificate = $this->input->post('certificate_id');
            if (isset($search)) {
                $this->form_validation->set_rules('class_id', $this->lang->line('class'), 'trim|required|xss_clean');

                $this->form_validation->set_rules('certificate_id', $this->lang->line('certificate'), 'trim|required|xss_clean');
                if ($this->form_validation->run() == false) {

                } else {
                    $data['searchby']          = "filter";
                    $data['class_id']          = $this->input->post('class_id');
                    $data['section_id']        = $this->input->post('section_id');
                    $certificate               = $this->input->post('certificate_id');
                    $certificateResult         = $this->Generatecertificate_model->getcertificatebyid($certificate);
                    $data['certificateResult'] = $certificateResult;
                    $resultlist                = $this->student_model->searchByClassSection($class, $section);
                    $data['resultlist']        = $resultlist;
                    $title                     = $this->classsection_model->getDetailbyClassSection($data['class_id'], $data['section_id']);
                    $data['title']             = $this->lang->line('std_dtl_for') . ' ' . $title['class'] . "(" . $title['section'] . ")";
                }
            }
            $this->load->view('layout/header', $data);
            $this->load->view('admin/certificate/generatecertificate', $data);
            $this->load->view('layout/footer', $data);
        }
    }

    public function generate($student, $class, $certificate)
    {
        $certificateResult         = $this->Generatecertificate_model->getcertificatebyid($certificate);
        $data['certificateResult'] = $certificateResult;
        $resultlist                = $this->student_model->searchByClassStudent($class, $student);
        $data['resultlist']        = $resultlist;

        $this->load->view('admin/certificate/transfercertificate', $data);

    }

    // public function generatemultipledd() {

    //     $studentid = $this->input->post('data');
    //     $student_array = json_decode($studentid);
    //     $class = $this->input->post('class_id');
    //     $results = array();
    //     foreach ($student_array as $key => $value) {
    //         $student = $value->student_id;
    //         $result = $this->student_model->searchByClassStudent($class, $student);
    //         $results[] = $result;
    //         $certificate = $this->input->post('certificate_id');
    //         $certificateResult = $this->Generatecertificate_model->getcertificatebyid($certificate);
    //         $data['certificateResult'] = $certificateResult;
    //     }
    //     $data['resultlist'] = $results;
    //     $this->load->view('admin/certificate/stugeneratecertificate', $data);

    // }

    public function generatemultiple()
    {

        $studentid           = $this->input->post('data');
        $student_array       = json_decode($studentid);
        $certificate_id      = $this->input->post('certificate_id');
        $class               = $this->input->post('class_id');
        $data                = array();
        $results             = array();
        $std_arr             = array();
        $data['sch_setting'] = $this->setting_model->get();
        $data['certificate'] = $this->Generatecertificate_model->getcertificatebyid($certificate_id);

        foreach ($student_array as $key => $value) {
            $std_arr[] = $value->student_id;
            $data_cert=array(
                             'userid'=>$value->student_id,
                             'class_id'=>$class,
                             'published_date'=>date('d-m-Y')
                             );
            
            
             $this->db->insert('userresults_log', $data_cert);
        }
        $data['students'] = $this->student_model->getStudentsByArray($std_arr);
        // print_r($data); die;
        $certificates = $this->load->view('admin/certificate/printcertificate', $data, true);
        echo $certificates;
    }

    // custom student report generation
    public function generateStudentReport()
    {
        $studentid           = $this->input->post('studentID');            
        $data['students'] = $this->student_model->getStudentsByID($studentid);        
        $certificates = $this->load->view('admin/certificate/studentDetailsReport', $data, true);
        echo $certificates;
    }

    public function generateStudentReport1()
    {
        $id           = $this->input->post('studentID');           
        if(!$this->rbac->hasPrivilege('student', 'can_view')) 
        {
            access_denied();
        }
        $data['title']         = 'Student Details';
        $student               = $this->student_model->get($id);
        $gradeList             = $this->grade_model->get();
        $studentSession        = $this->student_model->getStudentSession($id);
        $timeline              = $this->timeline_model->getStudentTimeline($id, $status = '');
        $data["timeline_list"] = $timeline;
        $student_session_id = $studentSession["student_session_id"];
        $student_session         = $studentSession["session"];
        $data['sch_setting']     = $this->sch_setting_detail;
        $data['adm_auto_insert'] = $this->sch_setting_detail->adm_auto_insert;
        $current_student_session = $this->student_model->get_studentsession($student['student_session_id']);
        $data["session"]              = $current_student_session["session"];
        $student_due_fee              = $this->studentfeemaster_model->getStudentFees($student['student_session_id']);
        $student_discount_fee         = $this->feediscount_model->getStudentFeesDiscount($student['student_session_id']);
        $data['student_discount_fee'] = $student_discount_fee;
        $data['student_due_fee']      = $student_due_fee;
        $siblings                     = $this->student_model->getMySiblings($student['parent_id'], $student['id']);
        $student_doc            = $this->student_model->getstudentdoc($id);
        $data['student_doc']    = $student_doc;
        $data['student_doc_id'] = $id;
        $category_list          = $this->category_model->get();
        $data['category_list']  = $category_list;
        $data['gradeList']      = $gradeList;
        $data['student']        = $student;
        $data['siblings']       = $siblings;
        $class_section          = $this->student_model->getClassSection($student["class_id"]);
        $data["class_section"]  = $class_section;
        $session                = $this->setting_model->getCurrentSession();
        $studentlistbysection         = $this->student_model->getStudentClassSection($student["class_id"], $session);
        $data["studentlistbysection"] = $studentlistbysection;
        $data['guardian_credential'] = $this->student_model->guardian_credential($student['parent_id']);
        $data['reason'] = $this->disable_reason_model->get();
        if($student['is_active'] = 'no') 
        {
            $data['reason_data'] = $this->disable_reason_model->get($student['dis_reason']);
        }
        $certificates = $this->load->view('admin/certificate/studentDetailsReport1', $data, true);
        echo $certificates;
    }

    public function downloadReport($id)
    {
        // echo $id;
        $data['title']         = 'Student Details';
        $student               = $this->student_model->get($id);
        $gradeList             = $this->grade_model->get();
        $studentSession        = $this->student_model->getStudentSession($id);
        $timeline              = $this->timeline_model->getStudentTimeline($id, $status = '');
        $data["timeline_list"] = $timeline;
        $student_session_id = $studentSession["student_session_id"];
        $student_session         = $studentSession["session"];
        $data['sch_setting']     = $this->sch_setting_detail;
        $data['adm_auto_insert'] = $this->sch_setting_detail->adm_auto_insert;
        $current_student_session = $this->student_model->get_studentsession($student['student_session_id']);
        $data["session"]              = $current_student_session["session"];
        $student_due_fee              = $this->studentfeemaster_model->getStudentFees($student['student_session_id']);
        $student_discount_fee         = $this->feediscount_model->getStudentFeesDiscount($student['student_session_id']);
        $data['student_discount_fee'] = $student_discount_fee;
        $data['student_due_fee']      = $student_due_fee;
        $siblings                     = $this->student_model->getMySiblings($student['parent_id'], $student['id']);
        $student_doc            = $this->student_model->getstudentdoc($id);
        $data['student_doc']    = $student_doc;
        $data['student_doc_id'] = $id;
        $category_list          = $this->category_model->get();
        $data['category_list']  = $category_list;
        $data['gradeList']      = $gradeList;
        $data['student']        = $student;
        $data['siblings']       = $siblings;
        $class_section          = $this->student_model->getClassSection($student["class_id"]);
        $data["class_section"]  = $class_section;
        $session                = $this->setting_model->getCurrentSession();
        $studentlistbysection         = $this->student_model->getStudentClassSection($student["class_id"], $session);
        $data["studentlistbysection"] = $studentlistbysection;
        $data['guardian_credential'] = $this->student_model->guardian_credential($student['parent_id']);
        $data['reason'] = $this->disable_reason_model->get();
        if($student['is_active'] = 'no') 
        {
            $data['reason_data'] = $this->disable_reason_model->get($student['dis_reason']);
        }
        $certificates = $this->load->view('admin/certificate/studentDetailsReportDownload', $data, true);
        // $certificates="hi";
        $pdfFilePath="downloadReport.pdf";
        $this->m_pdf->pdf->WriteHTML($certificates);
        $this->m_pdf->pdf->Output($pdfFilePath,"D");
    }
  
    public function downloadReport1($id)
    {
        $data['students'] = $this->student_model->getStudentsByID($id);  
        $certificates = $this->load->view('admin/certificate/studentDetailsReportDownload1', $data, true);     
        $pdfFilePath="downloadReport.pdf";
        $this->m_pdf->pdf->WriteHTML($certificates);
        $this->m_pdf->pdf->Output($pdfFilePath,"D");
    }
    // custom student report generation
    

}
