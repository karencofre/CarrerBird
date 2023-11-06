<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use     App\Models\Trabajador;
class RegistroController extends Controller
{

public function showRegistrationForm()
{
    return view('signup');
}

public function create()
{
    return view('signup');
}
public function register(Request $request)
{
    // Validación de los datos
    $this->validate($request, [
        'id_trabajador' => 'required',
        'email' => 'required',
        'password' => 'required|min:6',
    ]);

    $user = Trabajador::create([
        'email' => $request->email,
        'password' =>$request->password,
        'id_trabajador' => $request->id_trabajador,
        'active' => 1,
    ]);
    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
}
}
