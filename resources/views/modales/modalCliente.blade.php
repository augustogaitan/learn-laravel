<!-- Large modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> <h4 class="modal-title" id="myLargeModalLabel">Buscar Clientes</h4> 
        {!!Form::open(['route'=>'clientes.create'])!!}
        	{!!Form::text('busqueda',null,['class'=>'form-control','id'=>'datoBusqueda'])!!}
      		{!!Form::submit('buscar',['class'=>'btn btn-primary','id'=>'busquedaCliente'])!!}
      	{!!Form::close()!!}
      </div> 
      <div class="modal-body">
      	<table class="table">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>DNI</td>
					<td>Dirección</td>
					<td>Ciudad</td>
					<td>Telefono</td>
					<td>Email</td>
				</tr>
			</thead>
			<tbody>
			@foreach($clientes as $cliente)
				<tr>
					<td>{{$cliente->nombre}}</td>
					<td>{{$cliente->apellidos}}</td>
					<td>{{$cliente->dni}}</td>
					<td>{{$cliente->direccion}}</td>
					<td>{{$cliente->ciudad}}</td>
					<td>{{$cliente->telefono}}</td>
					<td>{{$cliente->email}}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
      </div> 
    </div>
  </div>
</div>
