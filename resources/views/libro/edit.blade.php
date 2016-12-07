@extends('layouts.admin')

@section('content')

@include('alerts.request')
{!!Form::model($libro,['route'=> ['libro.update', $libro->cod_l],'method'=>'PUT'])!!}
	<h2 ><font color="orange">MODIFICAR LIBRO</font></h2>
	
		@include('libro.forms.lb')
		{!!Form::submit('Modificar', ['class'=>'btn btn-lg btn-warning'])!!}
{!!Form::close()!!}		
&ensp;
&ensp;

{!!Form::open(['route'=> ['libro.destroy', $libro->cod_l],'method'=>'DELETE'])!!}
		
		{!!Form::submit('Eliminar', ['class'=>'btn btn-lg btn-danger'])!!}
{!!Form::close()!!}
@stop