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

Route::post('/login',function(){
    return view('login');
})->name('login');

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::post('/signup',function(){
    return view('signup');
})->name('signup');

Route::get('/signup',function(){
    return view('signup');
})->name('signup');


Route::get('/curr',function(){
    return view('curriculums');
})->name('curr')->middleware('auth');

Route::get('/perfil',function(){
    return view('perfil');
})->name('perfil')->middleware('auth');

Route::get('/solicitud',function(){
    return view('solicitudes');
})->name('solicitudes')->middleware('auth');


Route::get('/postulacion',function(){
    return view('postulacion');
})->name('postulacion')->middleware('auth');
