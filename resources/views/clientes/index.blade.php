@extends('layouts.admin')

@section('content')

<table class="table">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>DNI</td>
			<td>Dirección</td>
			<td>Ciudad</td>
			<td>Telefono</td>
			<td>Email</td>
			<td>Opciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($clientes as $cliente)
		<tr>
			<td>{{$cliente->nombre}}</td>
			<td>{{$cliente->apellidos}}</td>
			<td>{{$cliente->dni}}</td>
			<td>{{$cliente->direccion}}</td>
			<td>{{$cliente->ciudad}}</td>
			<td>{{$cliente->telefono}}</td>
			<td>{{$cliente->email}}</td>
			<td>
				{!!link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary']) !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop