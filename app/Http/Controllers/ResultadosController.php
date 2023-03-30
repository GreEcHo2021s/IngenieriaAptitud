<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultados;
use App\Models\Formulario;


class ResultadosController extends Controller
{
    //
    public function index()
    {
        $resultado = Resultados::all();
        return view('resultado.index', compact('resultado'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'respuesta' => 'required',
        ]);
        $usuario= Formulario::findorFail($request->idUsuario);
        $resultado_respuesta=new Resultados($request->except('idUsuario'));
        $usuario->Resultados()->save($resultado_respuesta);
        return view('views.resultado', ['valor' => $resultado_respuesta]);
    }
    
}
