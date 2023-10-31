<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContratistaController extends Controller
{

    public function store(Request $request){
        $contratista = new Contratista();
        $contratista->save();
        return redirect()->route('contratista.index')->with('success', 'Contratista creado correctamente');
    }

}
