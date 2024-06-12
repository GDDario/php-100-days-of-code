<?php

// Define the response header content type. In this case, we will respond with JSON.
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
$requestUri = isset($_SERVER['PATH_INFO']) ? explode('/', trim($_SERVER['PATH_INFO'], '/')) : [];

switch ($method) {
    case 'GET':
        handleGet($requestUri);
        break;
    case 'POST':
        handlePost();
        break;
    case 'PUT':
        handlePut($requestUri);
        break;
    case 'DELETE':
        handleDelete($requestUri);
        break;
}

function handleGet($request)
{
    $users = [
        [
            'id' => 'SADIUHU_NLSD',
            'name' => 'Luiddy'
        ],
        [
            'id' => 'SDOPA@MZÇLDZ',
            'name' => 'Jean'
        ]
    ];

    // Verify if the request points to a specific resource.
    if (isset($request[0])) {
        $id = $request[0];
        foreach ($users as $user) {
            if ($user['id'] === $id) {
                header("HTTP/1.1 200 Success");
                echo json_encode($user);
                exit; // Ensure the script stops executing after sending the response
            }
        }

        // Send a 404 header if the user is not found
        header("HTTP/1.1 404 Not Found");
        echo json_encode(["message" => "User with id \"$id\" not found."]);
        exit;
    } else {
        header("HTTP/1.1 200 Success");
        echo json_encode($users);
        exit; // Ensure the script stops executing after sending the response
    }
}

function handlePost()
{
    $input = json_decode(file_get_contents('php://input'), true);
    if ($input && isset($input['name'])) {
        header("HTTP/1.1 200 Created");
        echo json_encode(['status' => 201, 'message' => 'User created successfully!']);
    } else {
        header("HTTP/1.1 400 Bad Content");
        echo json_encode(['status' => 400, 'message' =>  'Invalid data.']);
    }
    exit;
}

function handlePut($request)
{
    if (isset($request[0])) {
        $id = $request[0];
        $input = json_decode(file_get_contents('php://input'), true);
        if ($input && isset($input['name'])) {
            header("HTTP/1.1 200 Success");
            echo json_encode(['status' => 200, "message" => "User updated successfully.", "id" => $id, "user" => $input]);
        } else {
            header("HTTP/1.1 400 Bad Content");
            echo json_encode(["message" => "Invalid data."]);
        }
    } else {
        header("HTTP/1.1 400 Bad Content");
        echo json_encode(["message" => "Invalid ID"]);
    }
}

function handleDelete($request)
{
    if (isset($request[0])) {
        $id = $request[0];
        header("HTTP/1.1 200 Success");
        echo json_encode(['status' => 200, "message" => "User with id $id deleted succesffully."]);
    } else {
        header("HTTP/1.1 400 Bad Content");
        echo json_encode(["message" => "Invalid ID"]);
    }
    exit;
}
