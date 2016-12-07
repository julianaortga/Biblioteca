<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class AutorLibro extends Model
{
    protected $table= "autor_libro";

    protected $fillable = ['cod_a','cod_l'];

     protected $primaryKey = ['cod_a','cod_l'];
     
  	 public function autor()
    {
    		return $this->belongsTo('App\Autor','cod_a');
    }

     public function libro()
    {
    		return $this->belongsTo('App\Libro','cod_l');
    }


}
