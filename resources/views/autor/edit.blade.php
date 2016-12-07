@extends('layouts.admin')

@section('content')

@include('alerts.request')
{!!Form::model($autor,['route'=> ['autor.update', $autor->cod_a],'method'=>'PUT'])!!}
	<h2 ><font color="orange">MODIFICAR AUTOR</font></h2>
	
		@include('autor.forms.au')
		{!!Form::submit('Modificar', ['class'=>'btn btn-lg btn-warning'])!!}
{!!Form::close()!!}		
&ensp;
&ensp;

{!!Form::open(['route'=> ['autor.destroy', $autor->cod_a],'method'=>'DELETE'])!!}
		
		{!!Form::submit('Eliminar', ['class'=>'btn btn-lg btn-danger'])!!}
{!!Form::close()!!}
@stop