<?php

$desiredMethod = 'GET';

if (!isset($_GET['method'])) {
    echo '<b>No method passed. Using GET as default.</b>';
} else {
    $desiredMethod = $_GET['method'];
}

$curl = curl_init();
$url = 'http://localhost:8080/php-100-days-of-code/days/Day%2023/scripts/mini-rest-api.php';

function makeGet(): mixed
{
    global $curl;
    global $url;

    if (isset($_GET['id'])) {
        $url .= '/' . $_GET['id'];
    }
    curl_setopt($curl, CURLOPT_URL, $url);
    // Make the request return the response, instead of printing it.
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //  return '';
    curl_setopt($curl, CURLOPT_TIMEOUT, 3);
    $response = curl_exec($curl);

    if ($response === false) {
        echo 'Curl error: ' . curl_error($curl);
    }

    curl_close($curl);
    return $response;
}

function makePost()
{
    global $curl;
    global $url;

    $data = ['name' => 'Charlies'];

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

function makePut()
{
    global $curl;
    global $url;

    $data = ['name' => 'Charlies'];

    $url .= '/1';

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

function makeDelete()
{
    global $curl;
    global $url;

    $url .= '/1';

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

switch (strtoupper($desiredMethod)) {
    case 'GET':
        echo '<b>GET request.</b>';
        echo '<br>';
        $response = makeGet();
        echo '<br>Response:<br>';
        echo $response;
        break;
    case 'POST':
        echo '<b>POST request.</b>';
        echo '<br>';
        $response = makePost();
        echo '<br>Response:<br>';
        echo $response;
        break;
    case 'PUT':
        echo '<b>PUT request.</b>';
        echo '<br>';
        $response = makePut();
        echo '<br>Response:<br>';
        echo $response;
        break;
    case 'PUT':
        echo '<b>PUT request.</b>';
        echo '<br>';
        $response = makePut();
        echo '<br>Response:<br>';
        echo $response;
        break;
    case 'DELETE':
        echo '<b>DELETE request.</b>';
        echo '<br>';
        $response = makeDelete();
        echo '<br>Response:<br>';
        echo $response;
        break;
    default:
        echo 'Method not allowed';
        break;
}
