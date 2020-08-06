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

Route::get('/me', function () {
    return ['NIS' => '3103118116', 
    'Nama' => 'Rizal Ahmad Dafa', 
    'Gender' => 'Laki-laki', 
    'Phone' => '081227060634', 
    'Class' => 'XII RPL 4'];
});

Route::get('auth', 'AuthController@me');