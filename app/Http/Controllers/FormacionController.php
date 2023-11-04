<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormacionController extends Controller
{
    //
    public function store(Request $request){
        $formacion = new Formacion();
        $formacion->save();
        return redirect()->route('formacion.index')->with('success', 'Formacion creado correctamente');
    }

    public function index(){
        $formaciones = Formacion::all();
        return view('formacion.index', ['formaciones',$formaciones]);
    }

    public function show(){
        $formacion = Formacion::find($id);
        return view('formacion.show', ['formacion',$formacion]);
    }

    public function edit (string $id){
        $formacion = Formacion::find($id);
        return view('formacion.edit', ['formacion',$formacion]);
    }

    public function update(Request $request,string $id){
        $formacion = Formacion::find($id);
        $formacion->fill($request->all());
        $formacion->save();
        return redirect()->route('formacion.index')->with('success', 'Formacion actualizado correctamente');
    }

    public function destroy(string $id){
        $formacion = Formacion::find($id);
        $formacion->delete();
        return redirect()->route('formacion.index')->with('success', 'Formacion eliminado correctamente');
    }
}
