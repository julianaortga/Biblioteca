@extends('layouts.admin')

@section('content')


  
  {!!Form::open(['route'=>'sede.store','method'=>'post'])!!}
  <h2 ><font color="orange">REGISTRAR SEDE</font></h2>
  &ensp;
  &ensp;
    
    <div class="form-group">
      
        <div class="row">
            <div class="col-md-6">
              {!!Form::label('Nombre: ')!!}
              {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la Sede'])!!}
          </div>      
        </div>
    </div>  
    <div class="form-group">
      
        <div class="row">
            <div class="col-md-6">
              {!!Form::label('Direccion: ')!!}
              {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa la direccion de la Sede'])!!}
          </div>      
        </div>
    </div>
    
    

    {!!Form::submit('Registrar', ['class'=>'btn btn-lg btn-warning'])!!}
  {!!Form::close()!!}   
          
         
@stop