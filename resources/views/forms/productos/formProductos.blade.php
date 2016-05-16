
<div class="form-group">
{!!Form::label('nombre','Nombre Producto')!!}
{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('descripcion','Description')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('precio','Precio')!!}
	{!!Form::text('precio',null,['class'=>'form-control','placeholder'=>'Ingrese el precio del producto'])!!}
</div>
<div class="form-group">
	{!!Form::label('categorias','Seleccionar Categoria')!!}
	{!!Form::select('categorias_id',$selectCategoria,['S'=>'Small','placeholder' => 'Seleccionar categoria'],['class'=>'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('imagen','Imagen Producto')!!}
	<span class="btn btn-default btn-file">
		{!!Form::file('imagen',null)!!}
	</span>
</div>
