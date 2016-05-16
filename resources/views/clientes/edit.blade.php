@extends('layouts.admin')

@section('content')
	{!!Form::model($clientes,['route'=>['clientes.update',$clientes->id],'method'=>'PUT'])!!}
	
	@include('forms.clientes.formClientes')

	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop