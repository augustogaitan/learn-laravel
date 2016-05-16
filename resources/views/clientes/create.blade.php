@extends('layouts.admin')

@section('content')
	{!!Form::open(['route'=>'clientes.store','method'=>'POST'])!!}
	
	@include('forms.clientes.formClientes')

	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

@stop