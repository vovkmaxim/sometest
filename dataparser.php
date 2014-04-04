<?php
$data = json_decode($_POST['jsonData']);
$response = '';

foreach ($data as $key=>$value) {
    $response .= 'You '.$key.': '.$value."<br>";
}

$return_json_arr = array(
    'isSuccess' => true,
    'data' => [
        'message' => 'You comment add',
        'comment' => $response
        ]
);
echo json_encode($return_json_arr);