@extends('layouts.admin')

@section('content')

@include('alerts.request')
{{--	{!!Form::open(['route'=>'Autorlibro.store','method'=>'post'])!!}  --}}
	<h2 ><font color="orange">RELACIONAR LIBRO CON AUTOR</font></h2>
	
	
	<!--	<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    	{{--	{!!Form::label('Libro: ')!!}
			    		{!!Form::select('libro', $libros, null, ['class'=>'form-control'])!!}--}}
					</div>      
				</div>
		</div> -->
<div class="form-group">
			
				<div class="row">
			    	<div class="col-md-6">
			    		{!!Form::label('Autor: ')!!}
			    		{!!Form::select('autor', $autores, null, ['class'=>'form-control'])!!}
					</div>      
				</div>
		</div>
	
	{!!Form::close()!!}		
			    
			   
@stop