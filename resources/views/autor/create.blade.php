@extends('layouts.admin')

@section('content')

@include('alerts.request')
	{!!Form::open(['route'=>'autor.store','method'=>'post'])!!}
	<h2 ><font color="orange">REGISTRAR AUTOR</font></h2>
		
		@include('autor.forms.au')
			
		{!!Form::submit('Registrar', ['class'=>'btn btn-lg btn-warning'])!!} 
		
	{!!Form::close()!!}		
			    
			   
@stop