<?php

namespace Biblioteca\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use App\libro;
use App\ejemplar;
use App\Http\Requests;


class ConsultaEjemp extends Controller
{
   public function index(){
    	$libro = DB::select('select cod_l from libro order by cod_l DESC');
    	$ejemplar = DB::select('select * from ejemplar');
    	return view('busqueda.consultaEjemplaresXLibro')->with('ejemplar', $ejemplar)->with('libro', $libro);
	}

	public function store(Request $request){

		$libro = DB::select('select cod_l from libro order by cod_l DESC');
		$ejemplar =DB::select('select * from ejemplar where cod_l ='.$request['cod_l']);

		return view('consultas.consultaEjemplaresXLibro2')->with('ejemplar',$ejemplar)->with('libro', $libro);
    } 
}


