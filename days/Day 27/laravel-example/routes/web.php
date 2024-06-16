<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function () {
    $phpVersion = phpversion();
    $laravelVersion = app()->version();
    $users = User::all();

    return view('hello-world', [
        'phpVersion' => $phpVersion,
        'laravelVersion' => $laravelVersion,
        'users' => $users
    ]);
});
