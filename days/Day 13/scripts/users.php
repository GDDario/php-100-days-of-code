<?php

error_reporting(E_ALL);

include "read.php";

$users = readUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL CRUD</title>

    <style>
        th, td {
            padding: 4px;
        }

        table {
            max-height: 400px;
            overflow-y: auto;
        }

        fieldset {
            max-width: 300px;
        }
    </style>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Password</td>
                <td>Created at</td>
                <td>Updated at</td>
                <td>Actions</td>
            </tr>
        </thead>
        
        <tbody>
            <?php
                foreach($users as $user) {
                    $updatedAt = $user['updated_at'] ?? 'null';
                    echo '<tr>';
                    echo "<td>{$user['id']}</td>";
                    echo "<td>{$user['name']}</td>";
                    echo "<td>{$user['password']}</td>";
                    echo "<td>{$user['created_at']}</td>";
                    echo "<td>$updatedAt</td>";
                    echo "<td>
                            <form action='delete.php' method='post'>
                                <input type='hidden' name='id' value='{$user['id']}'>
                                <button>Delete</button>
                            </form>
                            <form action='update.php' method='get'>
                                <input type='hidden' name='id' value='{$user['id']}'>
                                <button>Update</button>
                            </form>
                        </td>";
                    echo '</tr>';
                }
            ?>
        </tbody>

        <tfoot>
            <tr>
                <td>Results</td>
                <td colspan="4"><?= count($users) ?></td>
            </tr>
        </tfoot>
    </table>

    <br>
    <fieldset>
        <legend>Create user</legend>

        <form action="create.php" method="post">
            <label>Name</label>
            <br>
            <input type="text" name="name">
            <br>
            <br>
            <label>Password</label>
            <br>
            <input type="password" name="password">

            <br>
            <br>
            <button>Submit</button>
        </form>
    </fieldset>

</body>

</html>