<?php

namespace Biblioteca\Http\Controllers;

use Biblioteca\Http\Requests\LibroCreateRequest;
use Biblioteca\Http\Requests\LibroUpdateRequest;
use Illuminate\Http\Request;
use Biblioteca\Libro;
use Biblioteca\Autor;
use Session;
use Redirect;


class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Libro = Libro::All();
        return view('libro.index',compact('Libro'));
    }

    public function create()
    {
        $autores= Autor::orderBy('nombre')->pluck('nombre','cod_a');
        return view('libro.create',compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LibroCreateRequest $request)
    {   
        $libro = new Libro($request->all());
        $libro ->save();
     
        Session::flash('message','Libro Creado Correctamente');
        return Redirect::to('/libro');
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
    public function edit($cod_l)
    {
        $Libro = Libro::find($cod_l);
        return view('libro.edit',['libro'=>$Libro]);
    }

    public function addAutor($cod_l)
    {
        $Libro = Libro::find($cod_l);
         return view('Libro.addAutor',['libro'=>$Libro]);
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update2( ){
        /*$libro = Libro::find($cod_l);
        $autor = new Autor($request->get());
        $libro->autores()->save($autor);
        Session::flash('message','Autor Correctamente');
        return Redirect::to('/libro');
        */

    }
    public function update(LibroUpdateRequest $request, $cod_l)
    {
        
        $Libro = Libro::find($cod_l);
        $Libro->fill($request->all());
        $Libro->save();

        Session::flash('message','Libro Modificado Correctamente');
        return Redirect::to('/libro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_l)
    {
        Libro::destroy($cod_l);

        Session::flash('message','Libro Eliminado Correctamente');
        return Redirect::to('/libro');
    }
}
