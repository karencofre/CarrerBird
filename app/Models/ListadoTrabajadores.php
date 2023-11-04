<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListadoTrabajadores extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'puntuacion',
        'trabajador_id',
    ];

    public function trabajadores(){
        return $this->hasMany(Trabajador::class);
    }
}
