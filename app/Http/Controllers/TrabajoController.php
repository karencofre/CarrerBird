<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    //
    public function store(Request $request){
        $trabajo = new Trabajo();
        $trabajo->save();
        return redirect()->route('trabajo.index')->with('success', 'Trabajo creado correctamente');
    }

    public function index(){
        $trabajos = Trabajo::all();
        return view('trabajo.index', ['trabajos',$trabajos]);
    }

    public function show(){
        $trabajo = Trabajo::find($id);
        return view('trabajo.show', ['trabajo',$trabajo]);
    }

    public function edit (string $id){
        $trabajo = Trabajo::find($id);
        return view('trabajo.edit', ['trabajo',$trabajo]);
    }

    public function update(Request $request,string $id){
        $trabajo = Trabajo::find($id);
        $trabajo->fill($request->all());
        $trabajo->save();
        return redirect()->route('trabajo.index')->with('success', 'Trabajo actualizado correctamente');
    }

    public function destroy(string $id){
        $trabajo = Trabajo::find($id);
        $trabajo->delete();
        return redirect()->route('trabajo.index')->with('success', 'Trabajo eliminado correctamente');
    }

    public function create(){
        return view('trabajo.create');
    }

}
