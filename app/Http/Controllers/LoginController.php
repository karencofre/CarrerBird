<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Trabajador;

use Illuminate\Foundation\Auth\ThrottlesLogins;

class LoginController extends Controller
{

public function register(Request $req){
    $trabajador = new Trabajador();
    $trabajador->id_trabajador = $req->input('id_trabajador');
    $trabajador->active = $req->input('active');
    $trabajador->nombre = $req->input('nombre');
    $trabajador->apellido = $req->input('apellido');
    $trabajador->correo = $req->input('correo');
    $trabajador->password = $req->input('password');
    $trabajador->save();

    Auth::login($trabajador);

    return redirect(route('/'));
}

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect(route('index'));
    }

    public function login(Request $req){

        $credentials = [
            'correo' => $req->input('correo'),
            'password' => $req->input('password'),
            'active' => '1',

        ];

        $remember = ($req->has('remenber') ? true : false);

        if(Auth::attempt($credentials,$remember)){
            $req->session()->regenerate();
            return redirect(route('index'));
        }else{
            redirect(route('index'));
        }

    }

}
