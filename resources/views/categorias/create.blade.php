@extends('layouts.admin')

@section('content')
	{!!Form::open(['route'=>'categorias.store','method'=>'POST'])!!}
	@include('forms.categorias.formCategorias')
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop