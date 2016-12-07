@extends('layouts.admin')

@section('content')

@include('alerts.request')


	<h2 ><font color="orange">NUEVO AUTOR DEL LIBRO </font></h2> 

	{!!Form::open(['route'=>'autor.store','method'=>'post'])!!}
	
		@include('autor.forms.au')
			
		{!!Form::submit('Registrar', ['class'=>'btn btn-lg btn-warning'])!!} 
			{!!Form::close()!!}		


@stop