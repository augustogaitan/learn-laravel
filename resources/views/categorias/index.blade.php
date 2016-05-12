@extends('layouts.admin')

@section('content')
	<table class="table">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Opciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($categorias as $categoria)
		<tr>
			<td>{{$categoria->nombre}}</td>
			<td>{{$categoria->descripcion}}</td>
			<td>
				{!!link_to_route('categorias.edit', $title = 'Editar', $parameters = $categoria->id, $attributes = ['class'=>'btn btn-primary']) !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop