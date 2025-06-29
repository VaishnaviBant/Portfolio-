<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://control.msg91.com/api/v5/flow/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([ 
            'template_id' => '67bab934d6fc0504b309cb52',
            'sender' => 'Vaishnavi2002',
            'short_url' => '1',  // Set to "1" for enabled, "0" for disabled
            'mobiles' => '9632499215',
            'VAR1' => $name,  // Dynamically using input values
            'VAR2' => $message
        ]),
        CURLOPT_HTTPHEADER => [
            "Authkey: 442173Akoqse7mhC67babb92P1",
            "Accept: application/json",
            "Content-Type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error: " . $err;
    } else {
        echo $response;
    }
}
?>










