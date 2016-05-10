@extends('layouts.admin')

@section('content')

@if(count($errors)>0)
 	<div class="alert alert-danger alert-dismissible" rol="alert">
 		<button type="button" class="close" data-dismiss="alert" aria-label="close">
 			<span aria-hidden="true">&times;</span>
 		</button> 
 		<ul>
 			@foreach($errors->all() as $error)
 			<li>{!!$error!!}</li>
 			@endforeach
 		</ul>
	</div>
@endif

{!! Form::open(['route' => 'usuario.store','method'=>'POST']) !!}
	<div class="form-group">
		{!! Form::label('Nombre')!!}
		{!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Ingresa el nombre de Usuario'))!!}
	</div>
	<div class="form-group">
		{!! Form::label('Correo')!!}
		{!! Form::text('email',null,array('class'=>'form-control','placeholder'=>'Ingresa el nombre de Usuario'))!!}
	</div>
	<div class="form-group">
		{!! Form::label('Contraseña')!!}
		{!! Form::password('password',array('class'=>'form-control','placeholder'=>'Ingresa tu contraseña'))!!}
	</div>
{!! FORM::submit('Registrar',array('class'=>'btn btn-primary'))!!}
{!! Form::close() !!}


@stop