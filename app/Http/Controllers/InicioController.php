<?php

namespace Biblioteca\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function buscarLibroAutor(){
    	return view('buscarLibroAutor');
    }

    public function ingresarAdmin(){
    	return view('admin.ingresar');
    }

  
}
