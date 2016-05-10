<div class="form-group">
{!!Form::label('nombre','Nombre Producto')!!}
{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del producto'])!!}
</div>
<div class="form-group">
{!!Form::label('descripcion','Description')!!}
{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion del producto'])!!}
</div>
<div class="form-group">
{!!Form::label('imagen','Imagen Producto')!!}
{!!Form::file('imagen',null)!!}
</div>
