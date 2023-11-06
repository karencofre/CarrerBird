<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'correo',
        'cargo',
        'url_foto',
        'puntuacion',
        'acerca_de',
        'trabajado_id',
        'formacion_id',
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
