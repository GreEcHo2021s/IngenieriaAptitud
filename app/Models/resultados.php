<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Formulario;

class resultados extends Model
{
    use HasFactory;
    // Aca se indica la relación entre usuario y su respuesta.
    public function Formulario(){
        return $this->belongsTo(Formulario::class);
    }
    protected $fillable = [
        'respuesta'
    ];

    protected $rules = [
        'respuesta' => 'required'
    ];
}
