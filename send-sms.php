<?php 
    //CONNECT TO BURST API
    //SET UP THE KEYS
    $key = '[ENTER KEY HERE]';
    $secret = '[ENTER SECRET HERE]';

    //CREATE SMS BODY
    $body = "This is a simple sms send via burs sms api";

    //ENTER MOBILE NUMBER WHERE YOU WANT TO SEND THE SMS
    $mobile = "[ENTER MOBILE NUMBER HERE]";

    //SEND SMS FUNCTION
    $url ='https://api.transmitsms.com/send-sms.json?message='. $body.'&reply_callback=https://www.myserver.com/processreply.php?myparameter=myvalue&to='. $mobile.'&from=[ENTER FROM NUMBER HERE]';

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Basic ".base64_encode($key.":".$secret)
        ),
    ));

    $response = curl_exec($curl);
    $validate = json_decode($response);
?>