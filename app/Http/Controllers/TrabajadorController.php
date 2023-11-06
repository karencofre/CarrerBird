<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    //
    public function store(Request $request){
        $trabajador = new Trabajador();
        $trabajador->save();
        return redirect()->route('curriculums')->with('success', 'Trabajador creado correctamente');
    }

    public function index(){
        $trabajadores = Trabajador::all();
        return view('curriculums', ['trabajadores',$trabajadores]);
    }

    public function show(string $id){
        $trabajador = Trabajador::find($id);
        return view('curriculums', ['trabajador',$trabajador]);
    }

    public function edit (string $id){
        $trabajador = Trabajador::find($id);
        return view('curriculums', ['trabajador',$trabajador]);
    }

    public function update(Request $request,string $id){
        $trabajador = Trabajador::find($id);
        $trabajador->fill($request->all());
        $trabajador->save();
        return redirect()->route('curriculums')->with('success', 'Trabajador actualizado correctamente');
    }

    public function destroy(string $id){
        $trabajador = Trabajador::find($id);
        $trabajador->delete();
        return redirect()->route('curriculums')->with('success', 'Trabajador eliminado correctamente');
    }

    public function create(){
        return view('curriculums');
    }

}
