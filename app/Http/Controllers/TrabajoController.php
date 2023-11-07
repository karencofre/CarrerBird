<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo;
class TrabajoController extends Controller
{
    //
    public function store(Request $request){
        $trabajo = new Trabajo();
        $trabajo->nombre_trabajo = $request->cargo;
        $trabajo->fecha_inicio_trabajo = $request->fecha_inicio_e;
        $trabajo->fecha_fin_trabajo = $request->fecha_fin_e;
        $trabajadorId = $request->input('trabajador');
        $trabajo->trabajador = $trabajadorId;
        $trabajo->save();
        return redirect()->route('perfil')->with('success', 'Trabajo creado correctamente');
    }

    public function index(){
        $trabajos = Trabajo::all();
        return view('perfil', ['trabajos',$trabajos]);
    }

    public function show(){
        $trabajo = Trabajo::find($id);
        return view('perfil', ['trabajo',$trabajo]);
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



}
