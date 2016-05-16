<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
	protected $table = 'cliente';

	protected $fillable = ['nombre', 'apellidos', 'dni', 'direccion', 'ciudad', 'telefono','email'];
}
