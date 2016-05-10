@extends('layouts.admin')

@section('content')
<table class="table">
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Imagen</td>
			<td>Opciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($productos as $producto)
		<tr>
			<td>{{$producto->nombre}}</td>
			<td>{{$producto->descripcion}}</td>
			<td>
				<img src="{{$producto->imagen}}" alt="">
			</td>
			<td>
				{!!link_to_route('productos.edit', $title = 'Editar', $parameters = $producto->id, $attributes = ['class'=>'btn btn-primary']) !!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop