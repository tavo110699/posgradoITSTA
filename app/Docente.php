<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $fillable = ['id', 'nombre','especialidad','descripcion','email','visible'];
    public $timestamps = true;
}

