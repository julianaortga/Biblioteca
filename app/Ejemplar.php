<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    protected $table= "ejemplar";

    protected $fillable = ['cod_clasifiacion','estado','estan','cod_l'];

     protected $primaryKey = 'cod_e';

    public function libro()
    {
    		return $this->belongsTo('App\Libro');
    }

}
