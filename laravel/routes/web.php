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

Route::get('/anak-males', function() {
    return '<p>Halo Anak Males</p>';
});

Route::get('anak-males/user/{id?}', function ($id = "Tidak Ada") {
    return 'User '.$id;
});