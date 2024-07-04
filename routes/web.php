<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/StudentSavePage', function () {
    return view('index');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/AddStudent', 'addStudent');
    Route::post('/saveStudent','save')->name('student.save');
});

// some example cases

Route::get('/test-01', function () {
    return 'this is test-01';
});

Route::get('/test-02', function () {
    return 'this is test-02';
});

