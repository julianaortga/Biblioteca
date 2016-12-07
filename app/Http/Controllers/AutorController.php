<?php

namespace Biblioteca\Http\Controllers;

use Biblioteca\Http\Requests\AutorCreateRequest;
use Biblioteca\Http\Requests\AutorUpdateRequest;
use Illuminate\Http\Request;
use Biblioteca\Autor;
use Biblioteca\Libro;
use Biblioteca\AutorLibro;
use Session;
use Redirect;


class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Autor = Autor::All();
        return view('autor.index',compact('Autor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('autor.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AutorCreateRequest $request)
    {
        $autorLibro = new AutorLibro($request->all());
      
        $autor = new Autor($request->all());
        
        $autor ->save();
        Session::flash('message','Autor Creado Correctamente');
        return Redirect::to('/autor');      
    }

    public function store2(AutorCreateRequest $request)
    {   
         $autor = new Autor($request->all());
        DB::insert('insert to AutorLibro(cod_a,cod_l) values(?,?)',array($request['cod_a'],$request['cod_l'] ));

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
    public function edit($cod_a)
    {
        $Autor = Autor::find($cod_a);
        return view('autor.edit',['autor'=>$Autor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AutorUpdateRequest $request, $cod_a)
    {
        $Autor = Autor::find($cod_a);
        $Autor->fill($request->all());
        $Autor->save();

        Session::flash('message','Autor Modificado Correctamente');
        return Redirect::to('/autor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod_a)
    {
        Autor::destroy($cod_a);

        Session::flash('message','Autor Eliminado Correctamente');
        return Redirect::to('/autor');
    }


}
