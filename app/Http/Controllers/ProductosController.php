<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductosCreateRequest;
use App\Http\Requests\ProductosUpdateRequest;

use App\Productos;
use Redirect;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$productos = Productos::all();
        $productos = DB::table('productos')
            ->join('categorias', 'productos.categorias_id', '=', 'categorias.id')
            ->select('productos.*','categorias.nombre as categoriasNombre')
            ->get();
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectCategoria = ['categorias' => DB::table('categorias')->lists('nombre', 'id')];
        $selectCategoria = array_merge([''=>'Seleccionar Categoria'], $selectCategoria );

        return view('productos.create',compact('selectCategoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosCreateRequest $request)
    {

       Productos::create([
            'nombre'=>$request['nombre'],
            'descripcion'=>$request['descripcion'],
            'precio'=>$request['precio'],
            'imagen'=>$request['imagen'],
            'categorias_id'=>$request['categorias_id'],
            ]);

        return redirect('/productos')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Productos::find($id);
        return view('productos.edit',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductosUpdateRequest $request, $id)
    {
        $productos = Productos::find($id);
        $productos->fill($request->All());
        $productos->save();
        
        return Redirect::to('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
