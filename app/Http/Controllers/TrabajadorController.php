<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;

class TrabajadorController extends Controller
{
    //
    public function store(Request $request){
        $trabajador = new Trabajador();


        $trabajador->active = 1;
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->correo = $request->correo;
        $trabajador->password = $request->password;
        $trabajador->acerca_de = $request->acercaDe;
        $trabajador->renta = $request->expectativa;
        $trabajador->puntuacion =  rand(1, 100);
        $trabajador->save();
        return redirect()->route('index')->with('success', 'Trabajador creado correctamente');
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
        return view('perfil', ['trabajador',$trabajador]);
    }

    public function update(Request $request,string $id){
        $trabajador = Trabajador::find($id);
        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->correo = $request->correo;

        $trabajador->renta = $request->renta;
        $trabajador->save();
        return redirect()->route('perfil')->with('success', 'Trabajador actualizado correctamente');
    }

    public function destroy(string $id){
        $trabajador = Trabajador::find($id);
        $trabajador->delete();
        return redirect()->route('perfil')->with('success', 'Trabajador eliminado correctamente');
    }

    public function create(){
        return view('curriculums');
    }

    public function eliminarTrabajador($id) {
        Trabajo::where('trabajador', $id)->delete();
        Trabajador::destroy($id);

        return;
    }
    public function editarTrabajador($id) {
        $trabajador = Trabajador::find($id);

        if ($trabajador) {
            return view('actualizar', compact('trabajador'));
        } else {

        }
    }

}
