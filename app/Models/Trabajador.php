<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthContract;


class Trabajador extends Model implements AuthContract
{
    use Authenticatable;
    use HasFactory;

    protected $fillable = [

        'correo',
        'password',
        'trabajador_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
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
