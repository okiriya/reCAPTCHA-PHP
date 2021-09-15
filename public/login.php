<?php

require_once '../vendor/autoload.php';
use ReCaptcha\ReCaptcha;

$recaptcha = new ReCaptcha("6LfFPmscAAAAAAaK3oOStzlz9Nr2qulurUsKAWah");
$resp = $recaptcha->setExpectedHostname('localhost')
                  ->verify($_POST['g-recaptcha-response']);

if ($resp->isSuccess()) {
    echo "success";
} else {
    echo "failed";
    $errors = $resp->getErrorCodes();
}
   


