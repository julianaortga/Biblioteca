@extends('layouts.admin')

@section('content')

@include('alerts.request')
{!!Form::model($ejemplar,['route'=> ['ejemplar.update', $ejemplar->cod_e],'method'=>'PUT'])!!}
	<h2 ><font color="orange">MODIFICAR EJEMPLAR</font></h2>
	
		&ensp;
		&ensp;
		<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Codigo de Clasificacion: ')!!}
			    		{!!Form::text('cod_clasificacion',null,['class'=>'form-control','placeholder'=>'Ingresa el codigo de clasifiacion del Ejemplar'])!!}
					</div>      
				</div>
		</div>	
		<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Estado: ')!!}
			    		{!!Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ingresa el estado del Ejemplar'])!!}
					</div>      
				</div>
		</div>	
		<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Estante: ')!!}
			    		{!!Form::text('estan',null,['class'=>'form-control','placeholder'=>'Ingresa el numero de Estan del Ejemplar'])!!}
					</div>      
				</div>
		</div>
		{!!Form::submit('Modificar', ['class'=>'btn btn-lg btn-warning'])!!}
{!!Form::close()!!}		
&ensp;
&ensp;

{!!Form::open(['route'=> ['ejemplar.destroy', $ejemplar->cod_e],'method'=>'DELETE'])!!}
		
		{!!Form::submit('Eliminar', ['class'=>'btn btn-lg btn-danger'])!!}
{!!Form::close()!!}
@stop