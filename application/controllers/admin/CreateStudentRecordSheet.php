<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CreateStudentRecordSheet extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("CreateStudentRecordSheetModel");
        
    }


    public function index() {
        $this->load->view("layout/header");
         $this->load->view('admin/frontoffice/CreateStudentRecordSheetView');
          $this->load->view("layout/footer");
          
           $admission_no = $this->input->post('admission_no');
           
           $juneJulyClass = $this->input->post('juneJulyClass');
            $juneJulyWrkDay = $this->input->post('juneJulyWrkDay');
             $juneJulyPrstDay = $this->input->post('juneJulyPrstDay');
             
             
           $septNovClass = $this->input->post('septNovClass');
            $septNovWrkDay = $this->input->post('septNovWrkDay');
             $septNovPrstDay = $this->input->post('septNovPrstDay');
             
             
           $decFebClass = $this->input->post('decFebClass');
            $decFebWrkDay = $this->input->post('decFebWrkDay');
             $decFebPrstDay = $this->input->post('decFebPrstDay');
             
             
           $marMayClass = $this->input->post('marMayClass');
            $marMayWrkDay = $this->input->post('marMayWrkDay');
             $marMayPrstDay = $this->input->post('marMayPrstDay');
             
             
           $conduct = $this->input->post('conduct');
            $dateOfLeavingSchool = $this->input->post('dateOfLeavingSchool');
             $classCourseOn = $this->input->post('classCourseOn');
             
             
           $identitymarkone = $this->input->post('identitymarkone');
            $identitymarktwo = $this->input->post('identitymarktwo');
          
             
         $this->CreateStudentRecordSheetModel->update($admission_no, $juneJulyClass, $juneJulyWrkDay, $juneJulyPrstDay, $septNovClass, $septNovWrkDay, $septNovPrstDay, $decFebClass, $decFebWrkDay, $decFebPrstDay, $marMayClass, $marMayWrkDay, $marMayPrstDay, $conduct, $dateOfLeavingSchool, $classCourseOn, $identitymarkone, $identitymarktwo);
             redirect('admin/CreateStudentRecordSheet');
    }
    
}
        
        