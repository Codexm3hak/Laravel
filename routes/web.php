<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ["name" => $name]);
});


route::view('/home','home');

// route::redirect('/home', '/');

route::get('user' , [UserController::class, 'getuser']);
route::get('user' , [UserController::class, 'user']);
