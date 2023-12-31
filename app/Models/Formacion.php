<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_formacion',
        'lugar_formacion',
        'grado_formacion',
    ];

}
