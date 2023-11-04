<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
        'horas',
        'centro',
        'observaciones',
    ];

    public function trabajador(){
        return $this->belongsTo(Trabajador::class);
    }
}
