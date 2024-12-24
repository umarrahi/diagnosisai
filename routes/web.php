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
    return view('index');
});

Route::get('/step1', function () {
    return view('diag-p-1');
});

Route::get('/step2', function () {
    return view('diag-p-2');
});

Route::get('/step3', function () {
    return view('diag-p-3');
});

Route::get('/step4', function () {
    return view('diag-p-4');
});

Route::get('/step5', function () {
    return view('diag-p-5');
});

Route::get('/step6', function () {
    return view('diag-p-6');
});

Route::get('/step7', function () {
    return view('diag-p-7');
});

Route::get('/finalstep', function () {
    return view('diag-report');
});
