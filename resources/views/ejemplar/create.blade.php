@extends('layouts.admin')

@section('content')

@include('alerts.request')	
	{!!Form::open(['route'=>'ejemplar.store','method'=>'post'])!!}
	<h2 ><font color="orange">REGISTRAR EJEMPLAR</font></h2>
		&ensp;
		<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Libro: ')!!}
			    		{!!Form::select('libro', $libro, null, ['class'=>'form-control'])!!}
					</div>      
				</div>
		</div>
		<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Codigo de Clasifiacion: ')!!}
			    		{!!Form::text('cod_clasificacion',null,['class'=>'form-control','placeholder'=>'Ingresa el codigo de clasificacion del Ejemplar'])!!}
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
		

		{!!Form::submit('Registrar', ['class'=>'btn btn-lg btn-warning'])!!}
	{!!Form::close()!!}		
			    
			   
@stop