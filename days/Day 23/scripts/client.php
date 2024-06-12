<?php

set_time_limit(1);

$desiredMethod = 'GET';

if (isset($_GET['method'])) {
    $desiredMethod = $_GET['method'];
} else {
    echo '<b>No method passed. Using GET as default.<b>';
    echo '<br><br>';
}

$desiredMethod = isset($_GET['method']) ? $_GET['method'] : 'GET';
$url = 'http://localhost:8080/mini-rest-api.php';

function makeGet(): mixed
{
    $curl = curl_init();
    global $url;

    echo 'GET METHOD!!';
    echo '<br>URL: ' . $url;

    if (isset($_GET['id'])) {
        $url .= '/' . $_GET['id'];
    }
    echo 'url: ' . $url;

    curl_setopt($curl, CURLOPT_URL, $url);
    // Make the request return the response, instead of printing it.
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);

    if ($response === false) {
        echo 'Curl error: ' . curl_error($curl);
    }

    curl_close($curl);
    return '';

    return $response;
}

switch (strtoupper($desiredMethod)) {
    case 'GET':
        makeGet();
        break;
    default:
        echo 'Method not allowed';
        break;
}
