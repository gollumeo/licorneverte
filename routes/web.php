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
})->name('/');

Route::get('/savoir-faire', function () {
    return view('savoir-faire');
})->name('savoir-faire');

Route::get('/galerie', function () {
    return view('galerie');
})->name('galerie');

Route::get('/references', function () {
    return view('references');
})->name('references');

Route::get('/destock', function () {
    return view('destock');
})->name('destock');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
