@extends('layouts.admin')

@section('content')
	{!!Form::open(['route'=>'productos.store', 'method'=>'POST', 'files' => true])!!}
	@include('forms.productos.formProductos')
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop