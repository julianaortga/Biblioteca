<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table= "profesor";

    protected $fillable = ['cod_profesor','area','cargo','cod_p'];

     protected $primaryKey = 'cod_profesor';

    public function persona()
    {
    		return $this->belongsTo('App\Persona');

    }
}
