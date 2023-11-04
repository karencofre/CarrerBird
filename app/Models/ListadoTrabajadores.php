<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListadoTrabajadores extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'direccion',
        'telefono',
        'email',
        'fecha_nacimiento',
        'fecha_contratacion',
        'fecha_baja',
        'observaciones',
    ];

    public function trabajadores(){
        return $this->hasMany(Trabajador::class);
    }
}
