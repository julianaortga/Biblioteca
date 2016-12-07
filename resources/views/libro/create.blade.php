@extends('layouts.admin')

@section('content')

@include('alerts.request')
	{!!Form::open(['route'=>'libro.store','method'=>'post'])!!}
	<h2 ><font color="orange">REGISTRAR LIBRO</font></h2>
	
	<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Autor: ')!!}
			    		{!!Form::select('autor', $autores, null, ['class'=>'form-control'])!!}
					</div>      
				</div>
		</div>
		@include('libro.forms.lb')
	
	
		{!!Form::submit('Registrar', ['class'=>'btn btn-lg btn-warning'])!!}
	{!!Form::close()!!}		
			    
			   
@stop