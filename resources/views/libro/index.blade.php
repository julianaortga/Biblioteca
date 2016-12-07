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
          <h2 class="text-center"><font color="orange">LIBROS</font></h2>
    </div>
        <div class="panel-body">
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><div class="text-center">Codigo</th></div>
                  <th><div class="text-center">Titulo</th></div>
                  <th><div class="text-center">Area</th></div>
                  <th><div class="text-center">Grado</th></div>
                  <th><div class="text-center">Modificar | Eliminar</th></div>
                </tr>
              </thead>
              @foreach($Libro as $libro)
              <tbody>
                <tr>
                  <td><div class="text-center">{{ $libro->cod_l }}</td></div>
                  <td><div class="text-center">{{ $libro->titulo }}</td></div>
                  <td><div class="text-center">{{ $libro->area }}</td></div>
                  <td><div class="text-center">{{ $libro->grado }}</td></div>
                   <td><div class="text-center">
                  {!!link_to_route('libro.edit', 'Modificar', $libro->cod_l, ['class'=>'btn btn-md btn-warning'])!!}
                  </td></div>
                            
                </tr>
              <tbody>
              @endforeach
            </table>



        </div>
  </div>


@stop