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
          <h2 class="text-center"><font color="orange">EJEMPLARES</font></h2>
    </div>
        <div class="panel-body">
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><div class="text-center">Codigo</th></div>
                  <th><div class="text-center">Codigo de Clasificacion</th></div>
                  <th><div class="text-center">Estado</th></div>
                  <th><div class="text-center">Estan</th></div>
                  <th><div class="text-center">Modificar | Eliminar</th></div>
                </tr>
              </thead>
              @foreach($Ejemplar as $ejemplar)
              <tbody>
                <tr>
                  <td><div class="text-center">{{ $ejemplar->cod_e }}</td></div>
                  <td><div class="text-center">{{ $ejemplar->cod_clasifiacion }}</td></div>
                  <td><div class="text-center">{{ $ejemplar->estado }}</td></div>
                  <td><div class="text-center">{{ $ejemplar->estan }}</td></div>
                  <td><div class="text-center">
                  {!!link_to_route('ejemplar.edit', 'Modificar', $ejemplar->cod_e, ['class'=>'btn btn-md btn-warning'])!!}
                  </td></div>
                </tr>
              <tbody>
              @endforeach
            </table>



        </div>
  </div>


@stop