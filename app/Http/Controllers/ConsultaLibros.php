<?php

namespace Biblioteca\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use View;
use App\libro;

class ConsultaLibros extends Controller
{
   public function index(){
    	$libro2 = DB::select('select cod_l from libro order by cod_l DESC');
        $libro = DB::select('select * from libro');
    	//return view('busqueda.resultLibro')->with('libro', $libro)->with('libro2', $libro2);
	}

	public function store(Request $request){
		$libro2 = DB::select('select cod_l from libro order by cod_l DESC');
        $libro = DB::select('select * from libro where cod_l='.$request['libro']);
		return view('busqueda.resultLibro')->with('libro', $libro)->with('libro2', $libro2);
    }
}
