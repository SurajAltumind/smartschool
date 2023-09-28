<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pushnotification
{

    public $CI;

	//com.qdocs.smartschool
    public $API_ACCESS_KEY = "AAAAyWiqEbI:APA91bEMASkzBFEvuksBDGs6sAfe4yUBAtH3RQbdO-3wtboNDOAzO1q3K9g10NOZ4jvR9mh1eHswhMUeDrLUF4h91pjStqGshsIr3MbydxtfDubMynCN7EYv4wRmcW3U4FK-uDHme8u0";
    public $fcmUrl         = "https://fcm.googleapis.com/fcm/send";

    public function __construct()
    {
        $this->CI = &get_instance();

    }

    public function send($tokens, $msg, $action = "")
    {

        
        $notificationData = [
            'title'  => $msg['title'],
            'body'   => $msg['body'],
            'action' => $action,
            'sound'  => 'mySound',
        ];

        $fcmNotification = [

            'to'          => $tokens, //single token
            'collapseKey' => "{$tokens}",
            'data'        => $notificationData,

        ];
        $headers = [
            'Authorization: key=' . $this->API_ACCESS_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);

        return true;

    }

}
