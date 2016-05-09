@extends ('layouts.admin')

@section('content')

{!! Form::model($user,['route' => ['usuario.update', $user->id], 'method'=>'PUT']) !!}
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
{!! FORM::submit('Actualizar',array('class'=>'btn btn-primary'))!!}
{!! Form::close() !!}

{!! Form::open(['route' => ['usuario.destroy', $user->id], 'method'=>'DELETE']) !!}
{!! FORM::submit('Eliminar',array('class'=>'btn btn-danger btn-primary'))!!}
{!! Form::close() !!}


@stop()