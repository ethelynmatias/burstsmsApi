<?php 
    //connect the burst sms api
    $key = '[ENTER KEY HERE]';
    $secret = '[ENTER SECRET HERE]';

    $body = "This is a simple sms send via burs sms api";
    $mobile = "[ENTER MOBILE NUMBER HERE]";

    $url ='https://api.transmitsms.com/send-sms.json?message='. $body.'&reply_callback=https://www.myserver.com/processreply.php?myparameter=myvalue&to='. $mobile.'&from=[ENTER NUMBER HERE]';
?>