php
copy code 
<?php
function sendMessage($number, $massage){
    $apiUrl =
    'https://api.whatsapp.com/send?phone='.$number.'&text='.urlcode($massage);
    $response = file_get_contents($apiUrl);
    return $response;

}

$number = '628123456789';
$massage = 'selamat datang di layanan kami ';
sendMessage($number, $massage);
?>