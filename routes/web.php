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
    return view('welcome');
});

Route::get('/savoir-faire', function () {
    return view('savoir-faire');
});

Route::get('/a-propos', function () {
    return view('a-propos');
});

Route::get('/references', function () {
    return view('references');
});

Route::get('/destock', function () {
    return view('destock');
});

Route::get('/contact', function () {
    return view('contact');
});
