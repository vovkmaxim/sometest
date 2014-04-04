<?php
$data = json_decode($_POST['jsonData']);
$response = '';

foreach ($data as $key=>$value) {
    $response .= 'You '.$key.': '.$value."<br>";
}
echo $response;
?>
