<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table= "estudiante";

    protected $fillable = ['grado','f_nacimiento','cod_p'];

     protected $primaryKey = 'cod_estudiante';

    public function persona()
    {
    		return $this->belongsTo('App\Persona');

    }
}
