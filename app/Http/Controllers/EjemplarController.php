<?php

namespace Biblioteca\Http\Controllers;

use Biblioteca\Http\Requests\EjemplarCreateRequest;
use Biblioteca\Http\Requests\EjemplarUpdateRequest;
use Illuminate\Http\Request;
use Biblioteca\Ejemplar;
use Biblioteca\Libro;
use Session;
use Redirect;



class EjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Ejemplar = Ejemplar::All();
        return view('ejemplar.index',compact('Ejemplar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libro = Libro::orderBy('titulo')->pluck('titulo','cod_l');
        return view('ejemplar.create',compact('libro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EjemplarCreateRequest $request)
    {
        $ejemplar = new Ejemplar($request->all());
        $ejemplar ->save();
        Session::flash('message','Ejemplar Creado Correctamente');
        return Redirect::to('/ejemplar');
   
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
    public function edit($cod_e)
    {
        $Ejemplar = Ejemplar::find($cod_e);
        return view('ejemplar.edit',['ejemplar'=>$Ejemplar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EjemplarUpdateRequest $request, $cod_e)
    {
         
        $Ejemplar = Ejemplar::find($cod_e);
        $Ejemplar->fill($request->all());
        $Ejemplar->save();

        Session::flash('message','Ejemplar Modificado Correctamente');
        return Redirect::to('/ejemplar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_e)
    {
        Ejemplar::destroy($cod_e);

        Session::flash('message','Ejemplar Eliminado Correctamente');
        return Redirect::to('/ejemplar');
    }
}
