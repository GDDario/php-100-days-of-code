<?php

// Define the response header content type. In this case, we will respond with JSON.
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

switch ($method) {
    case 'GET':
        handleGet($request);
        break;
    case 'POST':
        handlePost($request);
        break;
    case 'PUT':
        handlePut($request);
        break;
    case 'DELETE':
        handleDelete($request);
        break;
}

function handleGet($request)
{
    $users = [
        [
            'id' => 'SADIUHU@NLSD',
            'name' => 'Luiddy'
        ],
        [
            'id' => 'SDOPA@MZÇLDZ',
            'name' => 'Jean'
        ]
    ];

    // Verify if the request appoints/queries a specific resource.
    if (isset($request[0])) {
        $id = $request[0];
        foreach ($users as $user) {
            if ($user['id'] === $id) {
                echo json_encode($users);
                return;
            }
        }

        echo "User with id \"$id\" not found.";
    } else {
        echo json_encode($users);
    }
}

function handlePost($request)
{
    echo $request;
}

function handlePut($request)
{
    echo $request;
}

function handleDelete($request)
{
    echo $request;
}
