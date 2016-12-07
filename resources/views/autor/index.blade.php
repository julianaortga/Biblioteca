@extends('layouts.admin')

@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 {{ Session::get('message') }}
</div>

@endif

@section('content')	

<div class="panel panel-warning">
    <div class="panel-heading">
          <h2 class="text-center"><font color="orange">AUTORES</font></h2>
    </div>
        <div class="panel-body">
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><div class="text-center">Codigo</th></div>
                  <th><div class="text-center">Nombre</th></div>
                  <th><div class="text-center">Nacionalidad</th></div>
                  <th><div class="text-center">Modificar | Eliminar</th></div>

                </tr>
              </thead>
              @foreach($Autor as $autor)
              <tbody>
                <tr>
                  <td><div class="text-center">{{ $autor->cod_a }}</td></div>
                  <td><div class="text-center">{{ $autor->nombre }}</td></div>
                  <td><div class="text-center">{{ $autor->nacionalidad }}</td></div>
                  <td><div class="text-center">
                  {!!link_to_route('autor.edit', 'Modificar', $autor->cod_a, ['class'=>'btn btn-md btn-warning'])!!}
                  </td></div>
                </tr>
              <tbody>
              @endforeach
            </table>



        </div>
  </div>


@stop