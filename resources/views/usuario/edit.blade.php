@extends ('layouts.admin')

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