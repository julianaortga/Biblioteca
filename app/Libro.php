<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;
use Biblioteca\Autor;

class Libro extends Model
{
    protected $table= "libro";

    protected $fillable = ['titulo','area','grado','cod_a'];

     protected $primaryKey = 'cod_l';
     
    public function Autores()
    {
        return $this->belongsToMany(Autor::class,'cod_a');
    }	

     public function ejemplar()
    {
    	return $table->hasMany('App\Ejemplar','cod_l');
    }
}
