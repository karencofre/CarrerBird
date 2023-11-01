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

    public function index(){
        $contratistas = Contratista::all();
        return view('contratista.index', ['contratistas',$contratistas]);
    }

    public function show(){
        $contratista = Contratista::find($id);
        return view('contratista.show', ['contratista',$contratista]);
    }

    public function edit(string $id){
        $contratista = Contratista::find($id);
        return view('contratista.edit', ['contratista',$contratista]);
    }

    public function update(Request $request,string $id){
        $contratista = Contratista::find($id);
        $contratista->fill($request->all());
        $contratista->save();
        return redirect()->route('contratista.index')->with('success', 'Contratista actualizado correctamente');
    }

    public function destroy(string $id){
        $contratista = Contratista::find($id);
        $contratista->delete();
        return redirect()->route('contratista.index')->with('success', 'Contratista eliminado correctamente');
    }
}
