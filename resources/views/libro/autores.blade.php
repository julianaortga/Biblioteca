@extends('layouts.admin')


@section('content')	

<div class="panel panel-warning">
    <div class="panel-heading">
          <h2 class="text-center"><font color="orange">AUTORES DEL LIBRO</font></h2>
    </div>
        <div class="panel-body">
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><div class="text-center">Codigo</th></div>
                  <th><div class="text-center">Nombre</th></div>
                  <th><div class="text-center">Nacionalidad</th></div>

                </tr>
              </thead>
              @foreach($autores as $autor)
              <tbody>
                <tr>
                  <td><div class="text-center">{{ $autor->cod_a }}</td></div>
                  <td><div class="text-center">{{ $autor->nombre }}</td></div>
                  <td><div class="text-center">{{ $autor->nacionalidad }}</td></div>
                 </tr>
              <tbody>
              @endforeach
            </table>



        </div>
  </div>


@stop