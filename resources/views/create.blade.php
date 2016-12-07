@extends('layouts.admin')

@section('content')

@include('alerts.request')

{!! Form::Open(['route'=>'ejemplar.store','method'=>'post']) !!}
	<h2 ><font color="orange">REGISTRAR EJEMPLAR</font></h2>

	@include('ejemplar.forms.ej')

		{!! Form::submit('Registrar', ['class'=>'btn btn-lg btn-warning']) !!}

		{!! Form::close() !!}
@stop