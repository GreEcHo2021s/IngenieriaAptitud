<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Resultados;

class formulario extends Model
{
    use HasFactory;
    public function Resultados(){
        return $this->hasMany(Resultados::class);
    }
    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'email',
        'fecha_nacimiento',
        'educacion_alcanzada',
        'edad'
    ];

    protected $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'dni' => 'required',
        'email'=> 'required',
        'fecha_nacimiento' => 'required',
        'educacion_alcanzada' => 'required',
        'edad' => 'required'
    ];
}
