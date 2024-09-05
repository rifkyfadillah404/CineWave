<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/singin', function () {
    return view('singin');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/showmore', function () {
    return view('showmore');
});
