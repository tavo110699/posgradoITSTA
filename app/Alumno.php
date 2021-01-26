<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['id', 'nombre','ncontrol','idgeneracion','email','visible','egresado'];
    public $timestamps = true;
    public function generaciones(){
        return $this->belongsTo('App\Generacion','idgeneracion','id');
    }
}

