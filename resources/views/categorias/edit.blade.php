@extends('layouts.admin')

@section('content')
	{!!Form::model($categorias,['route'=>['categorias.update',$categorias->id],'method'=>'PUT'])!!}
	@include('forms.categorias.formCategorias')
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop