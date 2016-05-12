@extends('layouts.admin')

@section('content')

	{!! Form::model($productos,['route'=>['productos.update', $productos->id], 'method'=>'PUT', 'files' => true])!!}
	@include('forms.productos.formProductos')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop
