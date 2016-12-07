<?php

namespace Biblioteca\Http\Controllers;

use Biblioteca\Http\Requests\LibroCreateRequest;
use Biblioteca\Http\Requests\LibroUpdateRequest;
use Illuminate\Http\Request;
use Biblioteca\AutorLibro;
use Biblioteca\Autor;
use Biblioteca\Libro;
use Session;
use Redirect;


class AutorLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AutorLibro = AutorLibro::All();
        return view('autor.index',compact('AutorLibro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $autores= Autor::orderBy('nombre')->pluck('nombre','cod_a');
       // $libros= Libro::orderBy('nombre')->pluck('titulo','cod_l');
        return view('AutorLibro.create',compact('autores'));
       /* $AutorLibro = AutorLibro::find($cod_l,$cod_a);
        $AutorLibro->save();

        Session::flash('message','Autor Asignado Correctamente');
        return Redirect::to('/libro');
        */

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

       /* $autorLibro = new AutorLibro($request->all());
        $autorLibro ->save();
        Session::flash('message','Autor del Libro Creado Correctamente');
        return Redirect::to('/autorlibro');
        */
        return'probando';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_l,$cod_a)
    {
       
    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
