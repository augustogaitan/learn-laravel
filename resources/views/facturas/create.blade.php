@extends('layouts.admin')

@section('content')

	formulario para crear factura
	{!!Form::open(['route'=>'facturas.store','method'=>'POST'])!!}
	
	@include('forms.facturas.formFacturas')

	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	@include('modales.modalCliente')
	
@stop
 
