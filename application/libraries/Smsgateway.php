<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Smsgateway {

    private $_CI;
    private $sch_setting;

    public function __construct() {
        $this->_CI = &get_instance();
        $this->_CI->load->model('setting_model');
        $this->_CI->load->model('student_model');
        $this->_CI->load->model('teacher_model');
        $this->_CI->load->model('studentfeemaster_model');
        $this->_CI->load->model('librarian_model');
        $this->_CI->load->model('accountant_model');
        $this->_CI->load->model('smsconfig_model');
        $this->sch_setting = $this->_CI->setting_model->get();
    }

    public function sentNotification($send_to, $template = '', $detail) {
        $this->_CI->load->library('pushnotification');
        $msg = $this->getContent($detail, $template);
        $push_array = array(
            'title' => 'Fee Reminder',
            'body' => $msg
        );
        if ($send_to != "") {
            $this->_CI->pushnotification->send($send_to, $push_array, "mail_sms");
        }
    }

    public function sendSMS($send_to, $template = '', $detail) {
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        if ($template != "") {
            $msg = $this->getContent($detail, $template);
        } else {
            $msg = $detail;
        }

        if (!empty($sms_detail)) {
            
            
             if ($sms_detail->type == 'KSMBBV') {
               
                $from = $sms_detail->username;
                $sms_text = urlencode($msg);
                $sms_text = urlencode(utf8_encode($msg));
                $msg = "Message Testing KSMBBV test 555";

          //  $url = "http://smsatm.net/v3/api.php?username=ksmbbv&apikey=3b51d817eaa6c18b753c&senderid=KSMBBV&templateid=1507161198322251757&mobile=". $send_to."&message=" .$sms_text;

                $ret = file($url);    //Call Url variable by using file() function

                echo $ret;  
              
            } 
            
            
            
            
            
            if ($sms_detail->type == 'vilsasms') {
//echo '<pre>';print_r($send_to);die;
 $api_key =$sms_detail->api_id;
$contacts =$send_to;
$from =$sms_detail->username;
$sms_text = urlencode($msg);

$api_url = "http://account.vilsasms.com/app/smsapi/index.php?key=".$api_key."&campaign=0&routeid=3&type=text&contacts=".$contacts."&senderid=".$from."&msg=".$sms_text;

//Submit to server

$response = file_get_contents( $api_url);
//echo $response;

                
            }
            
            
            elseif ($sms_detail->type == 'clickatell') {

                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);
                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return true;
                }
            } else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact,
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);
                if ($response->IsError) {
                    return true;
                } else {
                    return true;
                }
            } else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $to = $send_to;
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
        return true;
    }

    public function sentRegisterSMS($id, $send_to, $template) {
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        $msg = $this->getStudentRegistrationContent($id, $template);
        if (!empty($sms_detail)) {
            if ($sms_detail->type == 'clickatell') {

                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);
                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return true;
                }
            } else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact,
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);

                if ($response->IsError) {
                    return true;
                } else {
                    return true;
                }
            } else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $to = $send_to;
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
        return true;
    }

    public function sentAddFeeSMS($detail, $template) {

        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        $send_to = $detail->contact_no;
        $msg = $this->getAddFeeContent($detail, $template);

        if (!empty($sms_detail)) {
            
            
               if ($sms_detail->type == 'KSMBBV') {
               
                $from = $sms_detail->username;
                $sms_text = urlencode($msg);
                //$sms_text = urlencode(utf8_encode($msg));
                $msg = "Message Testing KSMBBV test 555";

           // $url = "http://smsatm.net/v3/api.php?username=ksmbbv&apikey=3b51d817eaa6c18b753c&senderid=KSMBBV&templateid=1507161198322251757&mobile=". $send_to."&message=" .$sms_text;

                $ret = file($url);    //Call Url variable by using file() function

                $ret;  
              
            } 

            
            if ($sms_detail->type == 'clickatell') {
                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);
                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return false;
                }
            } 
            
            else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);

                if ($response->IsError) {
                    return false;
                } else {
                    return true;
                }
            } 
            
            
            else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($send_to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
    }

    public function sentAbsentStudentSMS($detail, $template) {
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();

        if (!empty($sms_detail)) {

            $send_to = $detail['guardian_phone'];
            $msg = $this->getAbsentStudentContent($detail, $template);
            
            
             if ($sms_detail->type == 'KSMBBV') {
               
                $from = $sms_detail->username;
                $sms_text = urlencode($msg);
                $sms_text = urlencode(utf8_encode($msg));
                $msg = "Message Testing KSMBBV test 555";

            //OLD SMS $url = "http://smsatm.net/v3/api.php?username=ksmbbv&apikey=3b51d817eaa6c18b753c&senderid=KSMBBV&templateid=1507161198322251757&mobile=". $send_to."&message=" .$sms_text;
            //$url = "http://smsatm.net/v3/api.php?username=ksmbbv&apikey=3b51d817eaa6c18b753c&senderid=KSMBBV&templateid=1707166918615023883&mobile=". $send_to."&message=" .$sms_text;
            

                $ret = file($url);    //Call Url variable by using file() function

                echo $ret;  
              
            } 

            if ($sms_detail->type == 'clickatell') {
                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);

                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return false;
                }
            } 
            
            
            else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact,
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);

                if ($response->IsError) {
                    return false;
                } else {
                    return true;
                }
            } else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($send_to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
    }

    public function sentAbsentStudentNotification($detail, $template) {

        $msg = $this->getAbsentStudentContent($detail, $template);
        $push_array = array(
            'title' => 'Absent Student',
            'body' => $msg,
        );
        if ($detail['parent_app_key'] != "") {
            $this->_CI->pushnotification->send($detail['parent_app_key'], $push_array, "mail_sms");
        }
    }

    public function sentExamResultNotification($detail, $template) {

        $msg = $this->getStudentResultContent($detail, $template);
        $push_array = array(
            'title' => 'Exam Result',
            'body' => $msg,
        );
        if ($detail['app_key'] != "") {
            $this->_CI->pushnotification->send($detail['app_key'], $push_array, "mail_sms");
        }
        if ($detail['parent_app_key'] != "") {
            $this->_CI->pushnotification->send($detail['parent_app_key'], $push_array, "mail_sms");
        }
    }

    public function sentExamResultSMS($detail, $template) {

        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        $msg = $this->getStudentResultContent($detail, $template);

        $send_to = $detail['guardian_phone'];

        if (!empty($sms_detail)) {
            if ($sms_detail->type == 'clickatell') {

                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);
                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return true;
                }
            } else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact,
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);

                if ($response->IsError) {
                    return true;
                } else {
                    return true;
                }
            } else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $to = $send_to;
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
        return true;
    }

    public function sendLoginCredential($chk_mail_sms, $sender_details, $template) {
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        $msg = $this->getLoginCredentialContent($sender_details['credential_for'], $sender_details, $template);

        $send_to = $sender_details['contact_no'];
        if (!empty($sms_detail)) {
            if ($sms_detail->type == 'clickatell') {

                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);
                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return true;
                }
            } else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);

                if ($response->IsError) {
                    return true;
                } else {
                    return true;
                }
            } else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
        return true;
    }

    public function sentHomeworkStudentNotification($detail, $template) {
        foreach ($detail as $student_key => $student_value) {
            $msg = $this->getHomeworkStudentContent($detail[$student_key], $template);
            $push_array = array(
                'title' => 'HomeWork',
                'body' => $msg
            );
            if ($student_value['app_key'] != "") {
                $this->_CI->pushnotification->send($student_value['app_key'], $push_array, "mail_sms");
            }
        }
    }

    public function sentOnlineClassStudentNotification($detail, $template) {
        foreach ($detail as $student_key => $student_value) {
            $msg = $this->getOnlineClassStudentContent($detail[$student_key], $template);

            $push_array = array(
                'title' => 'Online Class',
                'body' => $msg
            );

            if ($student_value['app_key'] != "") {
                $this->_CI->pushnotification->send($student_value['app_key'], $push_array, "mail_sms");
            }
        }
    }

    public function sentAddFeeNotification($detail, $template) {
        $msg = $this->getAddFeeContent($detail, $template);
        $push_array = array(
            'title' => 'Fees Notification',
            'body' => $msg
        );
        if ($detail->parent_app_key != "") {
            $this->_CI->pushnotification->send($detail->parent_app_key, $push_array, "mail_sms");
        }
    }

    public function sentHomeworkStudentSMS($detail, $template) {
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        if (!empty($sms_detail)) {

            foreach ($detail as $student_key => $student_value) {
                $send_to = $student_key;
                if ($send_to != "") {
                    $msg = $this->getHomeworkStudentContent($detail[$student_key], $template);
                    $subject = "HomeWork Notice";
                    if ($sms_detail->type == 'clickatell') {
                        $params = array(
                            'apiToken' => $sms_detail->api_id,
                        );
                        $this->_CI->load->library('clickatell', $params);

                        try {
                            $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                            foreach ($result['messages'] as $message) {
                                
                            }
                            return true;
                        } catch (Exception $e) {
                            return false;
                        }
                    } else if ($sms_detail->type == 'twilio') {

                        $params = array(
                            'mode' => 'sandbox',
                            'account_sid' => $sms_detail->api_id,
                            'auth_token' => $sms_detail->password,
                            'api_version' => '2010-04-01',
                            'number' => $sms_detail->contact,
                        );

                        $this->_CI->load->library('twilio', $params);

                        $from = $sms_detail->contact;
                        $to = $send_to;
                        $message = $msg;
                        $response = $this->_CI->twilio->sms($from, $to, $message);

                        if ($response->IsError) {
                            return false;
                        } else {
                            return true;
                        }
                    } else if ($sms_detail->type == 'msg_nineone') {

                        $params = array(
                            'authkey' => $sms_detail->authkey,
                            'senderid' => $sms_detail->senderid,
                        );
                        $this->_CI->load->library('msgnineone', $params);
                        $this->_CI->msgnineone->sendSMS($send_to, $msg);
                    } else if ($sms_detail->type == 'smscountry') {
                        $params = array(
                            'username' => $sms_detail->username,
                            'sernderid' => $sms_detail->senderid,
                            'password' => $sms_detail->password,
                        );
                        $this->_CI->load->library('smscountry', $params);
                        $this->_CI->smscountry->sendSMS($send_to, $msg);
                    } else if ($sms_detail->type == 'text_local') {
                        $params = array(
                            'username' => $sms_detail->username,
                            'hash' => $sms_detail->password,
                        );
                        $this->_CI->load->library('textlocalsms', $params);
                        $this->_CI->textlocalsms->sendSms(array($send_to), $msg, $sms_detail->senderid);
                    } else if ($sms_detail->type == 'custom') {
                        $this->_CI->load->library('customsms');
                        $from = $sms_detail->contact;
                        $to = $send_to;
                        $message = $msg;
                        $this->_CI->customsms->sendSMS($to, $message);
                    } else {
                        
                    }
                }
            }
        }
    }

    public function getStudentRegistrationContent($id, $template) {

        $session_name = $this->_CI->setting_model->getCurrentSessionName();
        $student = $this->_CI->student_model->get($id);
        $student['current_session_name'] = $session_name;

        foreach ($student as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }

        return $template;
    }

    public function getAddFeeContent($data, $template) {
        $currency_symbol = $this->sch_setting[0]['currency_symbol'];
        $school_name = $this->sch_setting[0]['name'];
        $invoice_data = json_decode($data->invoice);
        $data->invoice_id = $invoice_data->invoice_id;
        $data->sub_invoice_id = $invoice_data->sub_invoice_id;
        $fee = $this->_CI->studentfeemaster_model->getFeeByInvoice($data->invoice_id, $data->sub_invoice_id);
        $a = json_decode($fee->amount_detail);
        $record = $a->{$data->sub_invoice_id};
        $fee_amount = number_format((($record->amount + $record->amount_fine)), 2, '.', ',');
        $data->firstname = $fee->firstname;
        $data->lastname = $fee->lastname;
        $data->class = $fee->class;
        $data->section = $fee->section;
        $data->fee_amount = $currency_symbol . $fee_amount;

        foreach ($data as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }

        return $template;
    }

    public function sentOnlineClassStudentSMS($detail, $template) {

        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        if (!empty($sms_detail)) {

            foreach ($detail as $student_key => $student_value) {
                $send_to = $student_key;
                if ($send_to != "") {
                    $msg = $this->getOnlineClassStudentContent($detail[$student_key], $template);

                    $subject = "Online Class";
                    if ($sms_detail->type == 'clickatell') {
                        $params = array(
                            'apiToken' => $sms_detail->api_id,
                        );
                        $this->_CI->load->library('clickatell', $params);

                        try {
                            $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                            foreach ($result['messages'] as $message) {
                                
                            }
                            return true;
                        } catch (Exception $e) {
                            return false;
                        }
                    } else if ($sms_detail->type == 'twilio') {

                        $params = array(
                            'mode' => 'sandbox',
                            'account_sid' => $sms_detail->api_id,
                            'auth_token' => $sms_detail->password,
                            'api_version' => '2010-04-01',
                            'number' => $sms_detail->contact,
                        );

                        $this->_CI->load->library('twilio', $params);

                        $from = $sms_detail->contact;
                        $to = $send_to;
                        $message = $msg;
                        $response = $this->_CI->twilio->sms($from, $to, $message);

                        if ($response->IsError) {
                            return false;
                        } else {
                            return true;
                        }
                    } else if ($sms_detail->type == 'msg_nineone') {

                        $params = array(
                            'authkey' => $sms_detail->authkey,
                            'senderid' => $sms_detail->senderid,
                        );
                        $this->_CI->load->library('msgnineone', $params);
                        $this->_CI->msgnineone->sendSMS($send_to, $msg);
                    } else if ($sms_detail->type == 'smscountry') {
                        $params = array(
                            'username' => $sms_detail->username,
                            'sernderid' => $sms_detail->senderid,
                            'password' => $sms_detail->password,
                        );
                        $this->_CI->load->library('smscountry', $params);
                        $this->_CI->smscountry->sendSMS($send_to, $msg);
                    } else if ($sms_detail->type == 'text_local') {
                        $params = array(
                            'username' => $sms_detail->username,
                            'hash' => $sms_detail->password,
                        );
                        $this->_CI->load->library('textlocalsms', $params);
                        $this->_CI->textlocalsms->sendSms(array($send_to), $msg, $sms_detail->senderid);
                    } else if ($sms_detail->type == 'custom') {
                        $this->_CI->load->library('customsms');
                        $from = $sms_detail->contact;
                        $to = $send_to;
                        $message = $msg;
                        $this->_CI->customsms->sendSMS($to, $message);
                    } else {
                        
                    }
                }
            }
        }
    }

    public function sentOnlineMeetingStaffSMS($detail, $template) {

        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        if (!empty($sms_detail)) {

            foreach ($detail as $staff_key => $staff_value) {
                $send_to = $staff_key;
                if ($send_to != "") {
                    $msg = $this->getOnlineMeetingStaffContent($detail[$staff_key], $template);

                    $subject = "Online Meeting";
                    if ($sms_detail->type == 'clickatell') {
                        $params = array(
                            'apiToken' => $sms_detail->api_id,
                        );
                        $this->_CI->load->library('clickatell', $params);

                        try {
                            $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                            foreach ($result['messages'] as $message) {
                                
                            }
                            return true;
                        } catch (Exception $e) {
                            return false;
                        }
                    } else if ($sms_detail->type == 'twilio') {

                        $params = array(
                            'mode' => 'sandbox',
                            'account_sid' => $sms_detail->api_id,
                            'auth_token' => $sms_detail->password,
                            'api_version' => '2010-04-01',
                            'number' => $sms_detail->contact,
                        );

                        $this->_CI->load->library('twilio', $params);

                        $from = $sms_detail->contact;
                        $to = $send_to;
                        $message = $msg;
                        $response = $this->_CI->twilio->sms($from, $to, $message);

                        if ($response->IsError) {
                            return false;
                        } else {
                            return true;
                        }
                    } else if ($sms_detail->type == 'msg_nineone') {

                        $params = array(
                            'authkey' => $sms_detail->authkey,
                            'senderid' => $sms_detail->senderid,
                        );
                        $this->_CI->load->library('msgnineone', $params);
                        $this->_CI->msgnineone->sendSMS($send_to, $msg);
                    } else if ($sms_detail->type == 'smscountry') {
                        $params = array(
                            'username' => $sms_detail->username,
                            'sernderid' => $sms_detail->senderid,
                            'password' => $sms_detail->password,
                        );
                        $this->_CI->load->library('smscountry', $params);
                        $this->_CI->smscountry->sendSMS($send_to, $msg);
                    } else if ($sms_detail->type == 'text_local') {
                        $params = array(
                            'username' => $sms_detail->username,
                            'hash' => $sms_detail->password,
                        );
                        $this->_CI->load->library('textlocalsms', $params);
                        $this->_CI->textlocalsms->sendSms(array($send_to), $msg, $sms_detail->senderid);
                    } else if ($sms_detail->type == 'custom') {
                        $this->_CI->load->library('customsms');
                        $from = $sms_detail->contact;
                        $to = $send_to;
                        $message = $msg;
                        $this->_CI->customsms->sendSMS($to, $message);
                    } else {
                        
                    }
                }
            }
        }
    }

    public function getLoginCredentialContent($credential_for, $sender_details, $template) {
        if ($credential_for == "student") {
            $student = $this->_CI->student_model->get($sender_details['id']);
            $sender_details['url'] = site_url('site/userlogin');
            $sender_details['display_name'] = $student['firstname'] . " " . $student['lastname'];
        } elseif ($credential_for == "parent") {
            $parent = $this->_CI->student_model->get($sender_details['id']);
            $sender_details['url'] = site_url('site/userlogin');
            $sender_details['display_name'] = $parent['guardian_name'];
        } elseif ($credential_for == "staff") {
            $staff = $this->_CI->staff_model->get($sender_details['id']);
            $sender_details['url'] = site_url('site/login');
            $sender_details['display_name'] = $staff['name'];
        }

        foreach ($sender_details as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }

        return $template;
    }

    public function getAbsentStudentContent($student_detail, $template) {

        $session_name = $this->_CI->setting_model->getCurrentSessionName();
        $student_detail['current_session_name'] = $session_name;
        foreach ($student_detail as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }

    public function getStudentResultContent($student_result_detail, $template) {

        foreach ($student_result_detail as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }

    public function getContent($sender_details, $template) {

        foreach ($sender_details as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }

        return $template;
    }

    public function getHomeworkStudentContent($student_detail, $template) {

        foreach ($student_detail as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }

    public function getOnlineClassStudentContent($student_detail, $template) {

        foreach ($student_detail as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }

    public function getOnlineMeetingStaffContent($student_detail, $template) {

        foreach ($student_detail as $key => $value) {
            $template = str_replace('{{' . $key . '}}', $value, $template);
        }
        return $template;
    }

    public function sentSMSToAlumni($sender_details) {
        $sms_detail = $this->_CI->smsconfig_model->getActiveSMS();
        $msg = $sender_details['subject'] . " - Event From " . $sender_details['from_date'] . " To " . $sender_details['to_date'] . "\n" .
                $sender_details['body'];
        $send_to = $sender_details['contact_no'];

        if (!empty($sms_detail)) {
            
            
             if ($sms_detail->type == 'KSMBBV') {

                $from = $sms_detail->username;
                $sms_text = urlencode($msg);
                $sms_text = urlencode(utf8_encode($msg));
             //   $url = "http://smsatm.net/v3/api.php?username=ksmbbv&apikey=3b51d817eaa6c18b753c&senderid=KSMBBV&templateid=1507161198322251757&mobile=" . $send_to . "&message=" . $sms_text;
                $ret = file($url);
            } 
            
            else if ($sms_detail->type == 'clickatell') {

                $params = array(
                    'apiToken' => $sms_detail->api_id,
                );
                $this->_CI->load->library('clickatell', $params);
                try {
                    $result = $this->_CI->clickatell->sendMessage(['to' => [$send_to], 'content' => $msg]);
                    foreach ($result['messages'] as $message) {
                        
                    }
                    return true;
                } catch (Exception $e) {
                    return true;
                }
            } 
            
            else if ($sms_detail->type == 'twilio') {

                $params = array(
                    'mode' => 'sandbox',
                    'account_sid' => $sms_detail->api_id,
                    'auth_token' => $sms_detail->password,
                    'api_version' => '2010-04-01',
                    'number' => $sms_detail->contact,
                );

                $this->_CI->load->library('twilio', $params);

                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $response = $this->_CI->twilio->sms($from, $to, $message);

                if ($response->IsError) {
                    return true;
                } else {
                    return true;
                }
            } else if ($sms_detail->type == 'msg_nineone') {
                $params = array(
                    'authkey' => $sms_detail->authkey,
                    'senderid' => $sms_detail->senderid,
                );
                $this->_CI->load->library('msgnineone', $params);
                $this->_CI->msgnineone->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'smscountry') {
                $params = array(
                    'username' => $sms_detail->username,
                    'sernderid' => $sms_detail->senderid,
                    'password' => $sms_detail->password,
                );
                $this->_CI->load->library('smscountry', $params);
                $this->_CI->smscountry->sendSMS($send_to, $msg);
            } else if ($sms_detail->type == 'text_local') {
                $to = $send_to;
                $params = array(
                    'username' => $sms_detail->username,
                    'hash' => $sms_detail->password,
                );
                $this->_CI->load->library('textlocalsms', $params);
                $this->_CI->textlocalsms->sendSms(array($to), $msg, $sms_detail->senderid);
            } else if ($sms_detail->type == 'custom') {
                $this->_CI->load->library('customsms');
                $from = $sms_detail->contact;
                $to = $send_to;
                $message = $msg;
                $this->_CI->customsms->sendSMS($to, $message);
            } else {
                
            }
        }
        return true;
    }

}