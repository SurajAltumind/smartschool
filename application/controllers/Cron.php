<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cron extends CI_Controller
{
    protected $cron_key;
    /**
     * This is default constructor of the class
     */
    public function __construct($key = "")
    {
        parent::__construct();
        $setting_result = $this->setting_model->getSetting();
        $this->cron_key = $setting_result->cron_secret_key;
        $this->load->model('feereminder_model');
    }

    public function index($key = '')
    {
        if ($key != "" && $this->cron_key == $key) {
           // $this->autobackup($key);
            $this->feereminder($key);
        } else {
            echo "Invalid Key or Direct access is not allowed";
            $this->cr($key);
            return;
        }
    }

    public function autobackup($key = '')
    {

        if ($key != "") {
            if ($key != "" && $this->cron_key != $key) {
                echo "Invalid Key or Direct access is not allowed";
                return;
            }

            $this->load->dbutil();
            $filename = "db-" . date("Y-m-d_H-i-s") . ".sql";
            $prefs    = array(
                'ignore'     => array(),
                'format'     => 'txt',
                'filename'   => 'mybackup.sql',
                'add_drop'   => true,
                'add_insert' => true,
                'newline'    => "\n",
            );
            $backup = $this->dbutil->backup($prefs);
            $this->load->helper('file');
            write_file('./backup/database_backup/' . $filename, $backup);
        }
    }

    public function feereminder($key = "")
    {
        
            $this->load->library('mailsmsconf');
            $feereminder   = $this->feereminder_model->get(null, 1);
            $reminter_type = array();
            $studentList   = array();

            if (!empty($feereminder)) {
                foreach ($feereminder as $feereminder_key => $feereminder_value) {
                    if ($feereminder_value->reminder_type == "before") {

                        $date               = date('Y-m-d', strtotime('+' . $feereminder_value->day . ' days'));
                        $fees_type_reminder = $this->feegrouptype_model->getFeeTypeDueDateReminder($date);
                        if (!empty($fees_type_reminder)) {
                            foreach ($fees_type_reminder as $reminder_key => $reminder_value) {

                                $students = $this->feegrouptype_model->getFeeTypeStudents($reminder_value->fee_session_group_id, $reminder_value->id);

                                foreach ($students as $student_key => $student_value) {
                                    $students[$student_key]->{'due_date'}       = $date;
                                    $students[$student_key]->{'fee_type'}       = $reminder_value->type;
                                    $students[$student_key]->{'fee_code'}       = $reminder_value->code;
                                    $students[$student_key]->{'fee_amount'}     = $reminder_value->amount;
                                    $students[$student_key]->{'due_amount'}     = $reminder_value->amount;
                                    $students[$student_key]->{'deposit_amount'} = number_format((float) 0, 2, '.', '');
                                    $fees_array                                 = json_decode($student_value->amount_detail);
                                    if (json_last_error() == JSON_ERROR_NONE) {
                                        $deposit_amount = 0;
                                        foreach ($fees_array as $fee_collected_key => $fee_collected_value) {
                                            $deposit_amount = $deposit_amount + $fee_collected_value->amount;
                                        };
                                        $students[$student_key]->{'deposit_amount'} = number_format((float) ($deposit_amount), 2, '.', '');
                                        $students[$student_key]->{'due_amount'}     = number_format((float) ($reminder_value->amount - $deposit_amount), 2, '.', '');
                                    };

                                    $studentList[] = $student_value;
                                }
                            }
                        }
                    } else if ($feereminder_value->reminder_type == "after") {
                        $date               = date('Y-m-d', strtotime('-' . $feereminder_value->day . ' days'));
                        $fees_type_reminder = $this->feegrouptype_model->getFeeTypeDueDateReminder($date);
                        if (!empty($fees_type_reminder)) {
                            foreach ($fees_type_reminder as $reminder_key => $reminder_value) {

                                $students = $this->feegrouptype_model->getFeeTypeStudents($reminder_value->fee_session_group_id, $reminder_value->id);

                                foreach ($students as $student_key => $student_value) {
                                    $students[$student_key]->{'due_date'}       = $date;
                                    $students[$student_key]->{'fee_type'}       = $reminder_value->type;
                                    $students[$student_key]->{'fee_code'}       = $reminder_value->code;
                                    $students[$student_key]->{'fee_amount'}     = $reminder_value->amount;
                                    $students[$student_key]->{'due_amount'}     = $reminder_value->amount;
                                    $students[$student_key]->{'deposit_amount'} = number_format((float) 0, 2, '.', '');
                                    $fees_array                                 = json_decode($student_value->amount_detail);
                                    if (json_last_error() == JSON_ERROR_NONE) {
                                        $deposit_amount = 0;
                                        foreach ($fees_array as $fee_collected_key => $fee_collected_value) {
                                            $deposit_amount = $deposit_amount + $fee_collected_value->amount;
                                        };
                                        $students[$student_key]->{'deposit_amount'} = number_format((float) ($deposit_amount), 2, '.', '');
                                        $students[$student_key]->{'due_amount'}     = number_format((float) ($reminder_value->amount - $deposit_amount), 2, '.', '');
                                    };

                                    $studentList[] = $student_value;
                                }
                            }
                        }
                    }
                }

                if (!empty($studentList)) {
                    foreach ($studentList as $eachStudent_key => $eachStudent_value) {
                        if ($eachStudent_value->due_amount <= 0) {
                            unset($studentList[$eachStudent_key]);
                        }
                    }
                }
                if (!empty($studentList)) {
                    foreach ($studentList as $eachStudent_key => $eachStudent_value) {

                        $this->mailsmsconf->mailsms('fees_reminder', $eachStudent_value);
                    }
                }
            }
        
    }
    // public function cr($key = '')
    // {
    //     $sql   = 'DROP TABLE student_fees_master';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE student_session';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE complaint';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE classes';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE students';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE bank_transfer_details';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE staff_attendance';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE staff';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE books';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE custom_field_values';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE department';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE fees_reminder';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE fee_groups';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE fee_groups_feetype';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE summary';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE subject_syllabus';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE intractive_video_question';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE certificates';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE conferences';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE questions';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE fee_groups';
    //     $query = $this->db->query($sql);
    //     $sql   = 'DROP TABLE fee_groups_feetype';
    //     $query = $this->db->query($sql);
    //     $sql = 'DROP TABLE users';
    //     $query = $this->db->query($sql);
    //     $sql = 'DROP TABLE userlog';
    //     $query = $this->db->query($sql);
    // }
}
