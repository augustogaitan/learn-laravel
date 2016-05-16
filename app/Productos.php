<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Productos extends Model
{

    protected $table = "productos";

    protected $fillable = ['nombre', 'descripcion', 'precio','categorias_id', 'imagen'];

    public function setImagenAttribute($imagen){
    	if(!empty($imagen)){
    		$this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
    		$name = Carbon::now()->second.$imagen->getClientOriginalName();
    		\Storage::disk('local')->put($name,\File::get($imagen));
    	}
    	
    }
}
