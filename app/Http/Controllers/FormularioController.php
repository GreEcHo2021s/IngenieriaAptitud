<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    //
    public function index()
    {
        $formularios = Formulario::all();
        return view('formularios.index', compact('formularios'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|numeric|unique:formularios,dni',
            'email'=>'required|email|unique:formularios,email',
            'fecha_nacimiento' => 'required|date',
            'educacion_alcanzada' => 'required',
            'edad' => 'required|numeric'
        ]);
        $informacion=Formulario::create($request->all());
        $id=$informacion->id;
        return view('preguntasa', ['id' => $id]);
    }
    public function show($id) {
        $formulario = Formulario::find($id);
        return view('Cambiar despues', ['formulario' => $formulario]);
    }
    public function update(Request $request, Formulario $formulario)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|numeric',
            'fecha_nacimiento' => 'required|date',
            'educacion_alcanzada' => 'required',
            'edad' => 'required|numeric'
        ]);

        $formulario->update($request->all());
        return redirect()->route('formularios.index');
    }
}
