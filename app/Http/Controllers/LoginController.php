<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Trabajador;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
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

        ];

        $remember = ($req->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){
            $req->session()->regenerate();
            return;
        }else{
            return redirect(route('index'));
        }

    }

}
