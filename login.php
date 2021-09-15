<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// exit;

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => [
        'secret' => '6LfFPmscAAAAAAaK3oOStzlz9Nr2qulurUsKAWah',
        'response' => $_POST['g-recaptcha-response']
    ]
]);

$response = json_decode(curl_exec($curl), true);

if($response['success']){
    echo "success";
} else {
    echo "failed";
}

