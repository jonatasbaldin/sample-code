<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$call = $twilio->calls
               ->create("+14155551212",
                        "+18668675310",
                        array(
                            "method" => "GET",
                            "sendDigits" => "1234#",
                            "url" => "http://demo.twilio.com/docs/voice.xml"
                        )
               );

print($call->sid);