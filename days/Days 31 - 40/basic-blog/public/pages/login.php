<?php

session_start();

include '../../config/config.php';
include '../../includes/functions/redirect.php';

verifyItsLogged();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Basic Blog</title>

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/authentication-form.css">
</head>

<body>
    <div class="central-card-container">
        <div class="card">
            <form class="authentication-form" method="post" action="../../includes/forms/sign-in.php" aria-label="Login form">
                <div class="form-body" aria-label="Form body">
                    <h1>Login</h1>

                    <div class="input-block">
                        <label>Username or email</label>
                        <input type="text" name="username-email" />
                    </div>

                    <div class="input-block">
                        <label>Password</label>
                        <input type="password" name="password" />
                    </div>

                    <div class="input-block checkbox-block">
                        <input id="keep-connected" type="checkbox" name="keep-connected" />
                        <label for="keep-connected">Keep connected</label>
                    </div>
                </div>

                <div class="form-footer" aria-label="Form footer">
                    <button>Submit</button>

                    <a href="forgot-password.php">Forgot password</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>