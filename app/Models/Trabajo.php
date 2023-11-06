<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_trabajo',
        'fecha_inicio_trabajo',
        'fecha_fin_trabajo',
    ];


}
