<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
{
    // Validar los datos del formulario de inicio de sesión
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Intentar autenticar al usuario
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1])) {
        // La autenticación fue exitosa
        return redirect()->intended('/perfil');
    } else {
        // La autenticación falló
        return back()->withInput()->withErrors(['email' => 'Credenciales inválidas']);
    }
}

}
