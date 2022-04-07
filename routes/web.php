<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page', function () {
    return 'This is my page';
});

Route::get('/my_education', function () {
    return 'This is my education page';
});

Route::get('/my_hobbies', function () {
    return 'This is my hobbies page';
});

Route::get('/my_work_insight', function () {
    return 'This is my insight page';
});

