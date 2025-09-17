<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::post("/register-user",[Controller::class,"register_user"]);

Route::post("/login-user",[Controller::class,"login_user"]);