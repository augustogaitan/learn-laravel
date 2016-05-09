@extends('layouts.admin')

@section('content')

{!! Form::open(['route' => 'usuario.store','method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label('Nombre')!!}
		{!! Form::text('nombre',null,array('class'=>'form-control','placeholder'=>'Ingresa el nombre de Usuario'))!!}
	</div>
	<div class="form-group">
		{!! Form::label('Correo')!!}
		{!! Form::text('correo',null,array('class'=>'form-control','placeholder'=>'Ingresa el nombre de Usuario'))!!}
	</div>
	<div class="form-group">
		{!! Form::label('Contraseña')!!}
		{!! Form::password('password',array('class'=>'form-control','placeholder'=>'Ingresa tu contraseña'))!!}
	</div>
{!! FORM::submit('Registrar',array('class'=>'btn btn-primary'))!!}
{!! Form::close() !!}


@stop