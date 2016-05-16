
<div class="form-group">
	{!!Form::label('Cliente','Cliente')!!}
	{!!Form::text('cliente',null,['class'=>'form-control','placeholder'=>'Seleccionar Cliente'])!!}
	{!!Form::button('...',['id'=>'allcliente','class'=>'btn btn-primary','data-toggle'=>'modal','data-target'=>'.bs-example-modal-lg'])!!}
</div>
<div class="form-group">
	{!!Form::label('fecha','Fecha')!!}
	{!!Form::date('fecha',null,['class'=>'form-control','placeholder'=>'seleccionar fecha'])!!}
</div>
<div class="form-group">
	{!!Form::label('modo pago','Modo Pago')!!}
	{!!Form::text('modopago_id',null,['class'=>'form-control','placeholder'=>'Modo de Pago'])!!}
</div>


