<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $table= "administrativo";

    protected $fillable = ['cargo','cod_p'];

     protected $primaryKey = 'cod_administrativo';

    public function persona()
    {
    		return $this->belongsTo('App\Persona');

    }
}
