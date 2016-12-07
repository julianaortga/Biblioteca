<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table= "prestamo";

    protected $fillable = ['f_prest','f_solic','f_comp_dev','f_devoluc','cod_e','cod_p'];

    public function ejemplar()
    {
    		return $this->belongsTo('App\Ejemplar');

    }

    public function persona()
    {
    		return $this->belongsTo('App\Persona');
    	
    }


}
