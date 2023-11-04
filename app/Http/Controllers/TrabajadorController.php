<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    //
    public function store(Request $request){
        $trabajador = new Trabajador();
        $trabajador->save();
        return redirect()->route('trabajador.index')->with('success', 'Trabajador creado correctamente');
    }

    public function index(){
        $trabajadores = Trabajador::all();
        return view('trabajador.index', ['trabajadores',$trabajadores]);
    }

    public function show(){
        $trabajador = Trabajador::find($id);
        return view('trabajador.show', ['trabajador',$trabajador]);
    }

    public function edit (string $id){
        $trabajador = Trabajador::find($id);
        return view('trabajador.edit', ['trabajador',$trabajador]);
    }

    public function update(Request $request,string $id){
        $trabajador = Trabajador::find($id);
        $trabajador->fill($request->all());
        $trabajador->save();
        return redirect()->route('trabajador.index')->with('success', 'Trabajador actualizado correctamente');
    }

    public function destroy(string $id){
        $trabajador = Trabajador::find($id);
        $trabajador->delete();
        return redirect()->route('trabajador.index')->with('success', 'Trabajador eliminado correctamente');
    }

    public function create(){
        return view('trabajador.create');
    }

}
