<?php

include "mysql-connection.php";

function readUsers()
{
    $users = [];

    $sql = "SELECT * FROM user ORDER BY id ASC";
    $query = mysqli_query(mysqlConnection(), $sql);

    while ($row = mysqli_fetch_assoc($query)) {
        $users[] = $row;
    }

    return $users;
}
