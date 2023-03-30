<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    use HasFactory;
    protected $fillable = [
        'pregunta',
        'area',
        'carreraid',
        'carrera'
    ];

    protected $rules = [
        'pregunta' => 'required',
        'area' => 'required',
        'carreraid'=> 'required',
        'carrera'=> 'required'
    ];
}
