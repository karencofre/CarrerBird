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
})->name('index');

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::get('/curr',function(){
    return view('curriculums');
})->name('curr');

Route::get('perfil',function(){
    return view('perfil');
})->name('perfil');
