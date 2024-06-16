<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>

    <h1>Hello Laravel!</h1>

    <hr>

    <h3>Info:</h3>
    <p>- Running on php version {{ $phpVersion }}.</p>
    <p>- And laravel version {{ $laravelVersion }}.</p>

    <hr>

    <h3>Registered users (run <code>"php artisan db:seed"</code> to seed the data)</h3>
    <ul>
        @foreach ($users as $user)
            <li>
                <b>Name</b>: {{ $user->name }}, <b>email</b>: {{ $user->email }}
            </li>
        @endforeach
    </ul>

</body>

</html>
