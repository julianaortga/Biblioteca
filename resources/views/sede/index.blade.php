@extends('layouts.admin')

{{ $message = Session::get('message') }}
@if($message)

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Se ha registrado la Sede!</strong> 
</div>

@endif

@section('content')	

<div class="panel panel-warning">
    <div class="panel-heading">
          <h2 class="text-center"><font color="orange">SEDES</font></h2>
    </div>
        <div class="panel-body">
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><div class="text-center">Codigo</th></div>
                  <th><div class="text-center">Nombre</th></div>
                  <th><div class="text-center">Direccion</th></div>
                  <th><div class="text-center">Operacion</th></div>
                </tr>
              </thead>
              @foreach($Sede as $sede)
              <tbody>
                <tr>
                  <td><div class="text-center">{{ $sede->cod_s }}</td></div>
                  <td><div class="text-center">{{ $sede->nombre }}</td></div>
                  <td><div class="text-center">{{ $sede->direccion }}</td></div>
                  <td><div class="text-center">
                  {!!link_to_route('sede.edit', 'Modificar', $sede->cod_s, ['class'=>'btn btn-md btn-warning'])!!}
                  {!!link_to_route('sede.delete', 'Eliminar', $sede->cod_s, ['class'=>'btn btn-md btn-warning'])!!}
                  </td></div>
                </tr>
              <tbody>
              @endforeach
            </table>



        </div>
  </div>


@stop