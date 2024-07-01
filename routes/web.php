<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/StudentSavePage', function () {
    return view('index');
});

Route::get('/test-01', function () {
    return 'this is test-01';
});

Route::get('/test-02', function () {
    return 'this is test-02';
});

