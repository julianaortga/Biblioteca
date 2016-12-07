<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;
use Biblioteca\Libro;

class Autor extends Model
{
    protected $table= "autor";
    
    protected $fillable = ['nombre','nacionalidad','cod_l'];

    protected $primaryKey = 'cod_a';

    public function Libros()
    {
        return $this->belongsToMany(Libro::class,'cod_l');
    }

    
}
    

