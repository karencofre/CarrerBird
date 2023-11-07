<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\TrabajoController;
use App\Http\Controllers\FormacionController;
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
Route::post('/login', [LoginController::class,'login'])->name('login.post');
Route::get('/login', function () {
    return view('login');
})->name('login.index');
Route::get('/signup', function(){
    return view('signup');
})->name('signup');
Route::post('/signup', [LoginController::class,'register']);
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::post('/perfil',[TrabajadorController::class,'store'])->name('perfil');
Route::get('/perfil', function(){
    return view('perfil');
});
/*
Route::get('/solicitud',function(){
    return view('solicitudes');
})->name('solicitudes');*/
Route::get('/postulacion',function(){
    return view('postulacion');
})->name('postulacion');


Route::get('/curr',function(){
    return view('curriculums');
})->name('curr');

Route::resource('formacion', FormacionController::class);
Route::resource('trabajo', TrabajoController::class);
Route::resource('trabajador', TrabajadorController::class);
