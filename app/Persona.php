<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table= "persona";

    protected $fillable = ['noIdentifi','nombre','direccion','genero','celular','sede'];

     protected $primaryKey = 'cod_p';

    public function sede()
    {
    		return $this->belongsTo('App\Sede');

    }
}
