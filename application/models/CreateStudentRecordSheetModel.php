<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CreateStudentRecordSheetModel extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->current_session = $this->setting_model->getCurrentSession();
    }


public function update($admission_no, $juneJulyClass, $juneJulyWrkDay, $juneJulyPrstDay, $septNovClass, $septNovWrkDay, $septNovPrstDay, $decFebClass, $decFebWrkDay, $decFebPrstDay, $marMayClass, $marMayWrkDay, $marMayPrstDay, $conduct, $dateOfLeavingSchool, $classCourseOn, $identitymarkone, $identitymarktwo) 
{

$data = array(
        'juneJulyClass' => $juneJulyClass,
        'juneJulyWrkDay' => $juneJulyWrkDay,
        'juneJulyPrstDay' => $juneJulyPrstDay,
         'septNovClass' => $septNovClass,
        'septNovWrkDay' => $septNovWrkDay,
        'septNovPrstDay' => $septNovPrstDay,
         'decFebClass' => $decFebClass,
        'decFebWrkDay' => $decFebWrkDay,
        'decFebPrstDay' => $decFebPrstDay,
         'marMayClass' => $marMayClass,
        'marMayWrkDay' => $marMayWrkDay,
        'marMayPrstDay' => $marMayPrstDay,
         'conduct' => $conduct,
        'dateOfLeavingSchool' => $dateOfLeavingSchool,
        'classCourseOn' => $classCourseOn,
        'identitymarkone' => $identitymarkone,
        'identitymarktwo' => $identitymarktwo
);

$this->db->where('admission_no', $admission_no);
$this->db->update('students', $data);
}
}