@extends('layouts.admin')

@section('content')

<table class="table">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Usuario</td>
			<td align="center">Opciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td align="center">{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!}</td>
			
		</tr>
	@endforeach
	</tbody>
</table>
{!!$users->render()!!}
@stop()