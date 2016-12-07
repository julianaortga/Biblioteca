<?php

namespace Biblioteca;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table= "sede";

    protected $fillable = ['nombre','direccion'];

     protected $primaryKey = 'cod_s';
}
