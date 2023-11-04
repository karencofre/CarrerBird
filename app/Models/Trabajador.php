<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
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

    public function formaciones(){
        return $this->hasMany(Formacion::class);
    }

    public function trabajos(){
        return $this->hasMany(Trabajo::class);
    }

    public function contratas(){
        return $this->belongsToOne(Contratista::class);
    }

    public function listadoTrabajadores(){
        return $this->belongsTo(listadoTrabajadores::class);
    }
}
