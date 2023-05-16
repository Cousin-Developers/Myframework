<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('intro');
});

Route::get('master', function () {
    return view('master.index');
});

Route::get('botones', function () {
    return view('botones');
});

Route::get('intro', function () {
    return view('intro');
});