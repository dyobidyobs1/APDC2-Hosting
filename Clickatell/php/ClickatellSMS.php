<?php
    function notifSMS($apiKey, $to, $content){

        $url = "https://platform.clickatell.com/messages/http/send?apiKey=$apiKey&to=$to&content=" . urlencode($content);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'GET'
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result !== false) {
            return true;
        } else {
            return false;
        }
    }
?>
